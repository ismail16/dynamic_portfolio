<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Support\Str;


class ContactController extends Controller
{
   public function index()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        $contact->status = 1;
        $contact->save();
        return view('admin.contact.show', compact('contact'));
    }

    public function edit($id)
    {
        $scholarship = Scholarship::find($id);
        return view('admin.scholarship.edit', compact('scholarship'));
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('admin.contact.index')->with('message', 'Contact Deleted Successfully !');
    }
}
