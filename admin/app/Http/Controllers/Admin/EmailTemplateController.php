<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailTemplate;
use Illuminate\Http\Request;

class EmailTemplateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $templates = EmailTemplate::latest()->get();
        return view('admin.email.email_template_all', compact('templates'));
    }

    public function create()
    {
        return view('admin.email.email_template_create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ];
        $customMessages = [
            'subject.required' => 'Subject is required',
            'description.required' => 'Description is required',
        ];
        $this->validate($request, $rules, $customMessages);


        EmailTemplate::insert([
            'name' => $request->name,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);

        toastr()->success('Email Template Added!');

        return redirect()->route('admin.email.template');
    }

    public function edit($id)
    {
        $template = EmailTemplate::find($id);
        return view('admin.email.email_template_edit', compact('template'));
    }


    public function update(Request $request)
    {
        $rules = [
            'name' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ];
        $customMessages = [
            'subject.required' => 'Subject is required',
            'description.required' => 'Description is required',
        ];
        $this->validate($request, $rules, $customMessages);

        $temp_id = $request->id;

        EmailTemplate::findOrFail($temp_id)->update([
            'name' => $request->name,
            'subject' => $request->subject,
            'description' => $request->description,
        ]);

        toastr()->success('Updated Successfully!');
        return redirect()->route('admin.email.template');
    }

    public function delete($id)
    {
        EmailTemplate::findOrFail($id)->delete();

        toastr()->success('Email Template Deleted!');

        return redirect()->back();
    }
}

