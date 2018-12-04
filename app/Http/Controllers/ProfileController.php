<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function edit() {
      if (\Auth::user()->profile) {
          $p = \Auth::user()->profile;
      }
      else {
          $p = new \App\Profile;
          $p->user_id = \Auth::id();
          $p->name = ' ';
          $p->address = ' ';
          $p->phone = ' ';
          $p->email = ' ';
          $p->description = ' ';

          $p->save();
      }
      return view('profiles.edit', compact('p'));
  }

  public function update(Request $request) {

    $validatedData = $request->validate([
        'name' => 'required|max:75',
        'address' => 'max:100',
        'email' => 'required|email',
        'phone' => 'required|regex:/(\+1)[0-9]{10}/'
    ]);


      $p = \Auth::user()->profile;
      $p->name = $request->input('name');
      $p->address = $request->input('address');
      $p->phone = $request->input('phone');
      $p->email = $request->input('email');
      $p->description = $request->input('description');
      $p->save();
      $request->session()->flash('status', "Your profile was updated!");
      return redirect()->route('home');
  }

}
