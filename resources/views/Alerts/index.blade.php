@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">Contact List</div>
        <div class="card-body">
          <p>This is where a list of your alerts will be displayed.</p>
        </div>
      </div>

    @foreach(Auth::user()->alerts as $alert)
      <div class="card mt-4 mb-4">
        <div class="card-header text-center">{{$alert->name}}</div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <label for="alertdisplayintime" class="mt-2">Time In:</label>
              <input class="form-control mb-2" type="text" id="alertdisplayintime" name="alertdisplayintime" value="{{$alert->intime}}" readonly>
            </div>
            <div class="col">
              <label for="alertdisplaytimeout" class="mt-2">Time Out:</label>
              <input class="form-control mb-2" type="text" id="alertdisplaytimeout" name="alertdisplaytimeout" value="{{$alert->timeout}}" readonly>
            </div>
            <div class="col">
              <label for="alertdisplaypriority" class="mt-2">Priority:</label>
              <input class="form-control mb-2" type="text" id="alertdisplaypriority" name="alertdisplaypriority" value="{{$alert->priority}}" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="alertdisplaydescription" class="mt-2">Description:</label>
              <textarea class="form-control mb-2" id="alertdisplaydescription" name="alertdisplaydescription" readonly>{{$alert->description}}</textarea>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="alertdisplaylocation" class="mt-2">Location:</label>
              <input class="form-control mb-2" type="text" id="alertdisplaylocation" name="alertdisplaylocation" value="{{$alert->location}}" readonly>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <div class="row text-center">
            <div class="col">
              <a href="alerts/{{ $alert->id }}/edit" class="btn btn-primary">Edit</a>
            </div>
            <div class="col">
                <form action="/alerts/{{ $alert->id }}" method="POST">
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
