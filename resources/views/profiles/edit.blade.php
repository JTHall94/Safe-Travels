@extends('layouts.card')

@section('card-content')


  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-4">
        <div class="card-body">
          <h4 class="text-center">Edit Profile</h4>
          <p>This page displays your profile information. The form below is editable, just click the button at the bottom to save your changes!</p>
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
        <div class="card-header text-center">Profile</div>
        <div class="card-body">

          <form class="" method="post" action="/profile">
              @csrf
              @method('PUT')
              <div class="form-group">
                  <label for="name" class="mt-2">Name:</label>
                  <input class="form-control mb-2" type="text" id="name" name="name" value="{{ old('name') ? old('name') : $p->name }}" placeholder="Name...">

                  <label for="email" class="mt-2">Email:</label>
                  <input class="form-control mb-2" type="text" id="email" name="email" value="{{old('email') ? old('email') : $p->email }}" placeholder="Email...">

                  <label for="phone" class="mt-2">Phone Number:</label>
                  <p>* All phone numbers must begin with '+1' followed by the area code and regular digits of the number. *</p>
                  <input class="form-control mb-2" type="text" id="phone" name="phone" value="{{old('phone') ? old('phone') : $p->phone }}" placeholder="Phone Number...">

                  <label for="address" class="mt-2">Address:</label>
                  <input class="form-control mb-2" type="text" id="address" name="address" value="{{old('address') ? old('address') : $p->address }}" placeholder="Adress...">

                  <label for="description" class="mt-2">Description:</label>
                  <textarea class="form-control mb-2" id="description" name="description" placeholder="Describe yourself...">{{old('description') ? old('description') : $p->description}}</textarea>
              </div>

              <div>
                  <button type="submit" class="ml-2 float-right btn btn-primary">Save</button>
                  <a href="{{ url('/home') }}" class="btn btn-danger">Cancel</a>
              </div>

          </form>

        </div>
      </div>
    </div>
  </div>

@endsection
