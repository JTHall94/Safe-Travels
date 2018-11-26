@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">Contact List</div>
        <div class="card-body">
          <p>This is where a list of your contacts will be displayed. Each contact will display it's basic information as well as buttons for edit, delete (and possibly favorite).</p>
          <p>At the top of the list there will also be an option for creating a new contact, which will dropdown a hidden form.</p>
        </div>
      </div>

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

    </div>
  </div>

@endsection
