<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailConfiguration;
use Illuminate\Http\Request;

class EmailConfigurationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $email = EmailConfiguration::first();
        return view('admin.email.email_configuration', compact('email'));
    }

    public function update(Request $request)
    {
        $rules = [
            'mail_type' => 'required',
            'mail_host' => 'required',
            'email' => 'required',
            'smtp_username' => 'required',
            'smtp_password' => 'required',
            'mail_port' => 'required',
            'mail_encryption' => 'required',
        ];
        $customMessages = [
            'mail_type.required' => 'Mail type is required',
            'mail_host.required' => 'Mail host is required',
            'email.required' => 'Email is required',
            'smtp_username.required' => 'Smtp username is required',
            'smtp_password.unique' => 'Smtp password is required',
            'mail_port.required' => 'Mail port is required',
            'mail_encryption.required' => 'Mail encryption is required',
        ];
        $this->validate($request, $rules, $customMessages);

        EmailConfiguration::updateOrCreate(['id' => 1], [
            'mail_type' => $request->mail_type,
            'mail_host' => $request->mail_host,
            'email' => $request->email,
            'smtp_username' => $request->smtp_username,
            'smtp_password' => $request->smtp_password,
            'mail_port' => $request->mail_port,
            'mail_encryption' => $request->mail_encryption,
        ]);


        toastr()->success('Data Saved Successfully!');

        return redirect()->back();
    }
}

