<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class AdminProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $admin = Auth::guard('admin')->user();

        return view('admin.admin_profile', compact('admin'));
    }

    public function update(Request $request)
    {

        $id = Auth::guard('admin')->user()->id;

        $admin = Admin::find($id);

        $rules = [
            'name' => 'required',
            'email' => 'required|unique:admins,email,' . $admin->id,
            'password' => 'confirmed',
            'image' => 'file|mimes:png,jpg,jpeg|max:2048',
        ];
        $customMessages = [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'Email already exist',
            'password.confirmed' => 'Confirm password does not match',
            'image.mimes' => 'File type must be: png, jpg,jpeg',
            'image.max' => 'Maximum file size 2MB',
        ];

        $this->validate($request, $rules, $customMessages);

        if ($request->file('image')) {
            $old_image = $admin->image;
            $user_image = $request->image;
            $extention = $user_image->getClientOriginalExtension();
            $image_name = Str::slug($request->name) . date('-Y-m-d-h-i-s-') . rand(999, 9999) . '.' . $extention;
            $image_name = 'uploads/admin_profile/' . $image_name;
            Image::make($user_image)
                ->save(public_path() . '/' . $image_name);

            $admin->image = $image_name;
            $admin->save();
            if ($old_image) {
                if (File::exists(public_path() . '/' . $old_image)) unlink(public_path() . '/' . $old_image);
            }
        }

        if ($request->password) {
            $admin->password = Hash::make($request->password);
        }

        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();

        toastr()->success('Admin profile updated successfully!');

        return redirect()->route('admin.profile');
    }
}
