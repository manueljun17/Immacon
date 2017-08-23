<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

use Validator;

use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        if (is_null($contact))
        {
            return redirect('contact');
        }
        $defaultImage = 'img/settings/1.jpg';
        return view('contact.edit', compact('contact','defaultImage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $validation = Validator::make($input, Contact::$rules);
        if ($validation->passes())
        {
            $contact = Contact::find($id);
            $contact->update($input);
            return Redirect::route('admin.contact');
        }
        return Redirect::route('admin.contact.edit', $id)
        ->withInput();
    }

}
