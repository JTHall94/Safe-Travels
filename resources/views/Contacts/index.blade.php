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
                  <label for="contact_name" class="font-weight-bold">Name</label>
                  <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Name..." value="{{ old('contact_name') }}">
              </div>
              <div class="form-group">
                <label for="contact_email" class="font-weight-bold">Email</label>
                <input type="text" class="form-control" id="contact_email" name="contact_email" placeholder="Email..." value="{{ old('contact_email') }}">
              </div>
              <div class="form-group">
                <label for="contact_phone" class="font-weight-bold">Phone Number</label>
                <input type="text" class="form-control" id="contact_phone" name="contact_phone" placeholder="Name..." value="{{ old('contact_phone') }}">
              </div>
              <button type="submit" class="btn btn-warning">Add</button>
            </form>
        </div>
      </div>
      <div class="card">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
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
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>Favorite</td>
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

    <!--
    @foreach(Auth::user()->contacts as $contact)
      <div class="card mt-4 mb-4">
        <div class="card-header text-center">{{$contact->name}}</div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <label for="contactdisplayemail" class="mt-2">Email:</label>
              <input class="form-control mb-2" type="text" id="contactdisplayemail" name="contactdisplayemail" value="{{$contact->email}}" readonly>
            </div>
            <div class="col">
              <label for="contactdisplayemail" class="mt-2">Phone Number:</label>
              <input class="form-control mb-2" type="text" id="contactdisplayphone" name="contactdisplayphone" value="{{$contact->phone}}" readonly>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row text-center">
            <div class="col">
              <a href="contacts/{{ $contact->id }}/edit" class="btn btn-primary">Edit</a>
            </div>
            <div class="col">
              Favorite
            </div>
            <div class="col">
                <form action="/contacts/{{ $contact->id }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</i></button>
                </form>
            </div>
        </div>
      </div>
    @endforeach
  -->

    </div>
  </div>

@endsection
