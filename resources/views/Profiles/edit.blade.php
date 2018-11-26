@extends('layouts.card')

@section('card-content')

<!-- NOTE: Need to add Profile Picture functionality -->
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">Edit Profile</div>
        <div class="card-body">
          <p>This page will display an editable form with all of the user's current profile information, with save and cancel functions.</p>

          <form class="" method="post" action="/profile">
              @csrf
              @method('PUT')
              <div class="form-group">
                  <label for="name" class="mt-2">Name:</label>
                  <input class="form-control mb-2" type="text" id="name" name="name" value="{{ old('name') ? old('name') : $p->name }}" placeholder="Name...">

                  <label for="email" class="mt-2">Email:</label>
                  <input class="form-control mb-2" type="text" id="email" name="email" value="{{old('email') ? old('email') : $p->email }}" placeholder="Email...">

                  <label for="email" class="mt-2">Phone Number:</label>
                  <input class="form-control mb-2" type="text" id="phone" name="phone" value="{{old('phone') ? old('phone') : $p->phone }}" placeholder="Phone Number...">

                  <label for="email" class="mt-2">Address:</label>
                  <input class="form-control mb-2" type="text" id="address" name="address" value="{{old('address') ? old('address') : $p->address }}" placeholder="Adress...">

                  <label for="description" class="mt-2">Description:</label>
                  <textarea class="form-control mb-2" id="description" name="description" placeholder="Describe yourself...">{{old('description') ? old('description') : $p->description}}</textarea>
              </div>

              <div>
                  <button type="submit" class="ml-2 float-right btn btn-primary">Save</button>
                  <a href="{{ url('/home') }}" class="float-right btn btn-secondary">Cancel</a>
              </div>

          </form>

        </div>
      </div>
    </div>
  </div>

@endsection
