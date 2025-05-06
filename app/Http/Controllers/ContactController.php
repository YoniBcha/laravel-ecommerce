<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    function index()
    {
        return view('contact.index');
    }

    function handleContact(ContactRequest $request)
    {
        $contact = Contact::create($request->all());
        dd($contact->all());
    }
}
