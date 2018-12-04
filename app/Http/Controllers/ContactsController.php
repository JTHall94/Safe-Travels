<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //This is where we would work in create function routing, but we are writing that into the index page for this project.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //This is going to be one of the most important functions of the controller.
        // Create the new contact
        //NOTE: Need to work in favorite contact functionality (if still needed after review)
        $c = new \App\Contacts;
        $c->user_id = \Auth::id();
        $c->firstname = $request->input('contact_firstname');
        $c->lastname = $request->input('contact_lastname');
        $c->email = $request->input('contact_email');
        $c->phone = $request->input('contact_phone');
        $c->favorite = $request->input('favoritebtn');
        $c->save();

        // messaging
       $request->session()->flash('status', 'New contact created!');
       // redirect
       return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show function, possibly not needed since all contacts will be displayed within the index. NOTE: Check on this after other basic tasks have been completed.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $c = \App\Contacts::find($id);
       return view('contacts.edit', compact('c'));
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
      // Create the new conttact
      $c = \App\Contacts::find($id);
      $c->firstname = $request->input('new_contact_firstname');
      $c->lastname = $request->input('new_contact_lastname');
      $c->email = $request->input('new_contact_email');
      $c->phone = $request->input('new_contact_phone');
      $c->favorite = $request->input('favoritebtn');
      $c->save();


      // messaging
        $request->session()->flash('status', 'Contact updated!');
     // redirect
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $referer = request()->headers->get('referer');
        $force_delete = false;

        if ("/edit" == substr($referer, -5)) {
            $force_delete = true;
        }

        // Find catalogue
        $c = \App\Contacts::find($id);

        $c->alerts()->detach();

        // Delete the contact
        $c->delete();

        // messaging
        $request->session()->flash('status', 'Contact deleted!');
        // redirect
        return redirect()->route('contacts.index');
      }
}
