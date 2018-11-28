@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">Contact List <span class="float-right"><p><a data-toggle="collapse" href="#addForm">New Contact</a></p></span></div>
        <div class="card-body">
          <p>This is where a list of your contacts will be displayed. Each contact will display it's basic information as well as buttons for edit, delete (and possibly favorite).</p>
          <p>At the top of the list there will also be an option for creating a new contact, which will dropdown a hidden form.</p>
            <form id="addForm" class="collapse form clearfix pb-3 {{ $errors->any() ? 'show' : '' }}" action="" method="post">
              @csrf
              <div class="form-group">
                  <label for="contact_firstname" class="font-weight-bold">First Name</label>
                  <input type="text" class="form-control" id="contact_firstname" name="contact_firstname" placeholder="First Name..." value="{{ old('contact_firstname') }}">
              </div>
              <div class="form-group">
                  <label for="contact_lastname" class="font-weight-bold">Last Name</label>
                  <input type="text" class="form-control" id="contact_lastname" name="contact_lastname" placeholder="Last Name..." value="{{ old('contact_lastname') }}">
              </div>
              <div class="form-group">
                <label for="contact_email" class="font-weight-bold">Email</label>
                <input type="text" class="form-control" id="contact_email" name="contact_email" placeholder="Email..." value="{{ old('contact_email') }}">
              </div>
              <div class="form-group">
                <label for="contact_phone" class="font-weight-bold">Phone Number</label>
                <input type="text" class="form-control" id="contact_phone" name="contact_phone" placeholder="Phone Number..." value="{{ old('contact_phone') }}">
              </div>
              <div class="form-group">
                <label for="favoritebtn" class="font-weight-bold">Favorite</label>
                <input type="checkbox" class="ml-1" id="favoritebtn" name="favoritebtn" value="Yes">
              </div>

              <button type="submit" class="btn btn-warning">Add</button>
            </form>
        </div>
      </div>
      <div class="card mt-5">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Favorite</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
            @foreach(Auth::user()->contacts as $contact)
                <tr>
                    <th scope="row">{{$contact->id}}</th>
                    <td>{{$contact->firstname}}</td>
                    <td>{{$contact->lastname}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->favorite}}</td>
                    <td><a href="contacts/{{ $contact->id }}/edit" class="btn"><i class="fas fa-edit"></i></a></td>
                    <td>
                      <form action="/contacts/{{ $contact->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn" type="submit"><i class="text-danger fas fa-trash-alt"></i></button>
                      </form>
                    </td>
                </tr>
          @endforeach
              </tbody>
          </table>
        </div>
    </div>
  </div>

<template></template>
@endsection
