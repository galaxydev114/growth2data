<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Models\Contact;

class ContactsController extends Controller
{
    public function index()
    {
        return view('contacts.index');
    }

    public function saveContact(ContactsRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->route('messages.submit.success'); 
    }
}
