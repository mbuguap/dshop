<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Helpers\MailHelper;
use App\Http\Controllers\Controller;
use App\Mail\AdminForgetPassword;
use App\Models\Admin;
use App\Models\EmailTemplate;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AdminForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function forgetPassword()
    {
        return view('admin.auth.forget');
    }


    public function sendForgetEmail(Request $request)
    {

        $rules = [
            'email' => 'required'
        ];

        $customMessages = [
            'email.required' => 'Email is required',
        ];
        $this->validate($request, $rules, $customMessages);

        MailHelper::setMailConfig();
        $admin = Admin::where('email', $request->email)->first();
        if ($admin) {
            $admin->forget_password_token = Str::random(100);
            $admin->save();

            $template = EmailTemplate::where('name', 'Password Reset')->first();
            $message = $template->description;
            $subject = $template->subject;
            $message = str_replace('{{name}}', $admin->name, $message);

            Mail::to($admin->email)->send(new AdminForgetPassword($admin, $message, $subject));


            toastr()->success('Forgot password link send your email!');

            return Redirect()->back();
        } else {

            toastr()->error('Email does not exist!');

            return Redirect()->back();
        }
    }


    public function resetPassword($token)
    {
        $admin = Admin::where('forget_password_token', $token)->first();
        if ($admin) {
            return view('admin.auth.reset-pass', compact('admin', 'token'));
        } else {
            toastr()->error('Invalid token!');
            return Redirect()->back();
        }
    }

    public function storeResetData(Request $request, $token)
    {

        $rules = [
            'email' => 'required',
            'password' => 'required|confirmed|min:4'
        ];
        $customMessages = [
            'email.required' => 'Email is required!',
            'password.required' => 'Password is required!',
            'password.confirmed' => 'Password does not match!',
            'password.min' => 'Password must be 4 characters!',
        ];
        $this->validate($request, $rules, $customMessages);

        $admin = Admin::where('forget_password_token', $token)->first();
        if ($admin->email == $request->email) {

            $admin->password = Hash::make($request->password);
            $admin->forget_password_token = null;
            $admin->save();

            toastr()->success('Password Reset Successfully!');

            return Redirect()->route('admin.login');
        } else {

            toastr()->error('Oops! Something went wrong!');
            return back();
        }
    }
}
