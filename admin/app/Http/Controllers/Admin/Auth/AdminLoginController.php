<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::ADMIN;

    public function __construct()
    {
        $this->middleware('guest:admin-api')->except('adminLogout');
    }

    public function adminLoginPage()
    {
        return view('admin.auth.login');
    }

    public function storeLogin(Request $request)
    {

        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        $customMessages = [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ];

        $this->validate($request, $rules, $customMessages);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $isAdmin = Admin::where('email', $request->email)->first();
        if ($isAdmin) {
            if ($isAdmin->status == 1) {
                if (Hash::check($request->password, $isAdmin->password)) {
                    if (Auth::guard('admin')->attempt($credential, $request->remember)) {
                        toastr()->success('Logged in successfully!');
                        return redirect()->route('admin.dashboard');
                    }
                } else {
                    toastr()->error('Wrong password!');
                    return redirect()->route('admin.login');
                }
            } else {
                toastr()->error('Account not active!');
                return redirect()->route('admin.login');
            }
        } else {
            toastr()->error('Invalid email!');
            return redirect()->route('admin.login');
        }
    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();
        toastr()->success('Logged out successfully!');
        return redirect()->route('admin.login');
    }
}
