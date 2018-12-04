@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-body">
          <h4 class="text-center">Contact List</h4>
          <p>This page displays a table containing your contacts. You can edit or delete them with the buttons in each row.</p>
          <p>If you would like to create a new contact, click the link below.</p>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if ($errors->any())
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
          <h5 class="text-center"><a data-toggle="collapse" href="#addForm">New Contact</a></h5>
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
                <p>* All phone numbers must begin with '+1' followed by the area code and regular digits of the number. *</p>
                <input type="text" class="form-control" id="contact_phone" name="contact_phone" placeholder="Phone Number..." value="{{ old('contact_phone') }}">
              </div>
              <button type="submit" class="btn btn-warning">Add</button>
            </form>
        </div>
      </div>
      <div class="card mt-5">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
                  <th scope="col">Edit</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody>
            @foreach(Auth::user()->contacts as $contact)
                <tr>
                    <td>{{$contact->firstname}}</td>
                    <td>{{$contact->lastname}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td><a href="contacts/{{ $contact->id }}/edit" class="btn"><i class="fas fa-edit"></i></a></td>
                    <td>
                      <form action="/contacts/{{ $contact->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn clearbtn" type="submit"><i class="text-danger fas fa-trash-alt"></i></button>
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
