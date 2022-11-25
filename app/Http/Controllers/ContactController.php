<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function AdminContact()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function CreateContact()
    {
        return view('admin.contact.create');
    }

    public function AddContact(Request $request)
    {
        Contact::insert([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.contact')->with('succsess', 'Contact Data Inserted Successfull');
    }

    public function EditContact($id)
    {
        $contacts = Contact::find($id);
        return view('admin.contact.edit', compact('contacts'));
    }

    public function UpdateContact(Request $request, $id)
    {
        Contact::find($id)->update([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.contact')->with('succsess', 'Contact Data Updated Successfull');
    }

    public function DeleteContact($id)
    {
        Contact::find($id)->delete();
        return Redirect()->route('admin.contact')->with('succsess', 'Contact Data Deleted Successfull');
    }

    public function HomeContact()
    {
        $contacts = DB::table('contacts')->first();
        return view('pages.contact', compact('contacts'));
    }

    public function ContactForm(Request $request)
    {
        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('contact')->with('succsess', 'Your Message Sending  Successfull');
    }

    public function ContactMessage()
    {
        $messages = ContactForm::all();
        return view('admin.contact.message', compact('messages'));
    }

    public function DeleteMessage($id)
    {
        ContactForm::find($id)->delete();
        return Redirect()->route('admin.message')->with('succsess', 'Message Deleted Successfull');
    }
    
}
