<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contact::all();
        return view('Contacts.index', ['contacts' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'con_name' => 'required',
            'con_phone_number' => 'required|digits_between:9,15',
            'con_email' => ['required', 'email'],
            'con_age' => ['required', 'numeric', 'min:1']
        ]);

        Contact::create($request->all());
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $data = Contact::find($contact);
        //dd($data[0]);
        return view('Contacts.show', ['contact' => $data[0]]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $data = Contact::find($contact);
        //dd($data[0]);
        return view('Contacts.edit', ['contact' => $data[0]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $data = $request->validate([
            'con_name' => 'required',
            'con_phone_number' => 'required|digits_between:9,15',
            'con_email' => ['required', 'email'],
            'con_age' => ['required', 'numeric', 'min:1']
        ]);

        $contact->update($data);
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
    }
}
