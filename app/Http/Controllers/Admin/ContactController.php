<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view("admin.contact.index", compact('contacts'));
    }

    public function create()
    {
        return view("admin.contact.create");
    }

    public function store(Request $request)
    {
        $contact = new Contact();

        $request->validate([
            "name" => "string|required|max:150",
            "email" => "string|required|max:150",
            "phone_no" => "string|required|max:150",
            "message" => "string|required|max:150",
        ]);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_no = $request->phone_no;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->route("contact.index")->with('success', 'Message sent. Thank you!');
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view("admin.contact.edit", compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $request->validate([
            "name" => "string|required|max:150",
            "email" => "string|required|max:150",
            "phone_no" => "string|required|max:150",
            "message" => "string|required|max:150",
        ]);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_no = $request->phone_no;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->route("contact.index")->with('success', 'Contact updated.');
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route("contact.index");
    }
}
