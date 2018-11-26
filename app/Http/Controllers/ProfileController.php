<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  public function edit() {
      if (\Auth::user()->profile) {
          $p = \App\Profile::find(\Auth::user()->id);
      }
      else {
          $p = new \App\Profile;
          $p->user_id = \Auth::id();
          $p->save();
      }
      return view('profiles.edit', compact('p'));
  }

  public function update(Request $request) {
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
