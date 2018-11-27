@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit Contact</div>
        <div class="card-body">
          <form id="editContact" action="/contacts/{{ $c->id }}" method="post">
            @csrf
            @method('PUT')
              <div class="form-group">
                  <label for="new_contact_firstname" class="font-weight-bold mt-2">First Name:</label>
                  <input class="form-control mb-2" type="text" id="new_contact_firstname" name="new_contact_firstname" value="{{ old('new_contact_firstname') ? old('new_contact_firstname') : $c->firstname }}" placeholder="First Name...">
              </div>
              <div class="form-group">
                  <label for="new_contact_lastname" class="font-weight-bold mt-2">Last Name:</label>
                  <input class="form-control mb-2" type="text" id="new_contact_lastname" name="new_contact_lastname" value="{{ old('new_contact_lastname') ? old('new_contact_lastname') : $c->lastname }}" placeholder="Last Name...">
              </div>
              <div class="form-group">
                  <label for="new_contact_email" class="font-weight-bold mt-2">Email:</label>
                  <input class="form-control mb-2" type="text" id="new_contact_email" name="new_contact_email" value="{{old('new_contact_email') ? old('new_contact_email') : $c->email }}" placeholder="Email...">
              </div>
              <div class="form-group">
                  <label for="new_contact_phone" class="font-weight-bold mt-2">Phone Number:</label>
                  <input class="form-control mb-2" type="text" id="new_contact_phone" name="new_contact_phone" value="{{old('new_contact_phone') ? old('new_contact_phone') : $c->phone }}" placeholder="Phone Number...">
              </div>
              <div class="form-group">
                  <label for="favoritebtn" class="font-weight-bold">Favorite</label>
                  <input type="checkbox" class="ml-1" id="favoritebtn" name="favoritebtn" value="favorite">
              </div>
                  <button type="submit" class="btn btn-primary float-right">Update</button>
              </div>
        </div>
      </div>
    </div>
  </div>

@endsection
