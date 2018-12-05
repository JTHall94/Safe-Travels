@extends('layouts.card')

@section('card-content')




  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-4">
        <div class="card-body">
          <h4 class="text-center">Contact List</h4>
          <p>This page displays the data for the contact you are editing. For full integration with Safe Travels, all fields must be filled out.</p>
          @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
        </div>
      </div>
      <div class="card mt-5">
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
                  <p>* All phone numbers must begin with '+1' followed by the area code and regular digits of the number. *</p>
                  <input class="form-control mb-2" type="text" id="new_contact_phone" name="new_contact_phone" value="{{old('new_contact_phone') ? old('new_contact_phone') : $c->phone }}" placeholder="Phone Number...">
              </div>
                  <button type="submit" class="btn btn-primary float-right">Update</button>
                  <a href="{{ url('/contacts') }}" class="btn btn-danger">Cancel</a>
              </div>
        </div>
      </div>
    </div>
  </div>

@endsection


<!-- <input oninput="check_checkbox('bookmark_check_new', 'new_bookmark_url')"  name="new_bookmark_url" id="new_bookmark_url" class="mt-2 form-control" type="text" placeholder="New URL...">
