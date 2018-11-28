<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $id = \Auth::user()->id;
      $contacts = \App\Contacts::where('user_id', '=', $id);
      return view('alerts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Handled through the index.
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
      // Create the new alert
      //NOTE: Need to work in map functionality and google maps api calls.
      $a = new \App\Alerts;
      $a->user_id = \Auth::id();
      $a->name = $request->input('alert_name');
      $a->location = $request->input('alert_location');
      $a->description = $request->input('alert_description');
      $a->datein = $request->input('alert_datein');
      $a->dateout = $request->input('alert_dateout');
      $a->intime = $request->input('alert_intime');
      $a->timeout = $request->input('alert_timeout');
      $a->priority = $request->input('alert_priority');


      //$a->taggedcontacts = $request->input('taggedcontacts[]');
      //dd($request->input('taggedcontacts'));


      //NOTE: Add clothing/car fields?
      $a->save();

      foreach ($request->input('taggedcontacts') as $tags) {
        $a->contacts()->attach($tags);
      }

      // messaging
     $request->session()->flash('status', 'New alert created!');
     // redirect
     return redirect()->route('alerts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //NOTE: Probably want to work in a show function here, since it will be nice to independently view each alert and all of its information without anything
        //else cluttering up the view
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $a = \App\Alerts::find($id);
      $id = \Auth::user()->id;
      $contacts = \App\Contacts::where('user_id', '=', $id);
      $tags = $a->contacts;
      return view('alerts.edit', compact('a', 'contacts', 'tags'));
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
        $a = \App\Alerts::find($id);
        $a->user_id = \Auth::id();
        $a->name = $request->input('new_alert_name');
        $a->location = $request->input('new_alert_location');
        $a->description = $request->input('new_alert_description');
        $a->datein = $request->input('new_alert_datein');
        $a->dateout = $request->input('new_alert_dateout');
        $a->intime = $request->input('new_alert_intime');
        $a->timeout = $request->input('new_alert_timeout');
        $a->priority = $request->input('new_alert_priority');
        //NOTE: Add clothing/car fields?
        $a->save();

          $a->contacts()->detach();
        foreach ($request->input('taggedcontacts') as $tags) {
          $a->contacts()->attach($tags);
        }

        // messaging
       $request->session()->flash('status', 'Alert updated!');
       // redirect
       return redirect()->route('alerts.index');
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
      $a = \App\Alerts::find($id);


      // Delete the contact
      $a->delete();

      // messaging
      $request->session()->flash('status', 'Alert deleted!');
      // redirect
      return redirect()->route('alerts.index');
    }

}
