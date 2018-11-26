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
                  <label for="new_contact_name" class="mt-2">Name:</label>
                  <input class="form-control mb-2" type="text" id="new_contact_name" name="new_contact_name" value="{{ old('new_contact_name') ? old('new_contact_name') : $c->name }}" placeholder="Name...">

                  <label for="new_contact_email" class="mt-2">Email:</label>
                  <input class="form-control mb-2" type="text" id="new_contact_email" name="new_contact_email" value="{{old('new_contact_email') ? old('new_contact_email') : $c->email }}" placeholder="Email...">

                  <label for="new_contact_phone" class="mt-2">Phone Number:</label>
                  <input class="form-control mb-2" type="text" id="new_contact_phone" name="new_contact_phone" value="{{old('new_contact_phone') ? old('new_contact_phone') : $c->phone }}" placeholder="Phone Number...">

                  <button type="submit" class="btn btn-primary float-right">Update</button>

              </div>
        </div>
      </div>
    </div>
  </div>

@endsection
