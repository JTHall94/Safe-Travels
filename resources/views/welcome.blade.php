@extends('layouts.app')


@section('content')


<div class="container" id="welcomepage">
  <div class="card" id="welcomecard">
    <div class="card-body text-center">
      <h1 class="text-center">Safe Travels</h1>
      <div class="row">
        <div class="col">
          <p>Safe Travels is a web-based alert system that allows users to notify people they trust when they are enter potentially dangerous situations.</p>
          <p>Users can create an alert detailing times, geolocation, and other information, and if it is not resolved before the set end time, our system will send tagged contacts emails and texts with the relevant information.</p>
        </div>
      </div>
      <div class="row">
        <div class="col">
          @guest
            <p>Have an account? Go ahead and <a href="{{ route('login') }}">login</a>!</p>
            @if (Route::has('register'))
              <p>Don't have an account? Click <a href="{{ route('register') }}">here</a> to register.<p>
            @endif
          @else
            <p>Go to your personal <a href="/home">Dashboard</a>.<p>
          @endguest
        </div>
      </div>
    </div>
  </div>

@endsection
