@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">Contact List <span class="float-right"><p><a data-toggle="collapse" href="#addForm">New Alert</a></p></span></div>
        <div class="card-body">
          <p>This is where a list of your alerts will be displayed.</p>
          <form id="addForm" class="collapse form clearfix pb-3 {{ $errors->any() ? 'show' : '' }}" action="" method="post">
            @csrf
            <div class="form-group">
                <label for="alert_name" class="font-weight-bold">Name:</label>
                <input type="text" class="form-control" id="alert_name" name="alert_name" placeholder="Name..." value="{{ old('alert_name') }}">
            </div>
            <div class="form-group">
                <label for="alert_intime" class="mt-2 font-weight-bold">Time In:</label>
                <input class="form-control mb-2" type="text" id="alert_intime" name="alert_intime" value="{{old('new_alert_intime')}}" placeholder="Time In...">
            </div>
            <div class="form-group">
                <label for="new_alert_timeout" class="mt-2 font-weight-bold">Time Out:</label>
                <input class="form-control mb-2" type="text" id="alert_timeout" name="alert_timeout" value="{{old('new_alert_timeout')}}" placeholder="Time Out...">
            </div>
            <div class="form-group">
                <label for="new_alert_description" class="mt-2 font-weight-bold">Description:</label>
                <textarea class="form-control mb-2" id="alert_description" name="alert_description" placeholder="Description...">{{old('new_alert_description')}}</textarea>
            </div>
            <div class="form-group">
                <label for="new_alert_location" class="mt-2 font-weight-bold">Location:</label>
                <input class="form-control mb-2" type="text" id="alert_location" name="alert_location" value="{{old('alert_location')}}" placeholder="Location...">
            </div>
            <div class="form-group">
                <label for="new_alert_priority" class="font-weight-bold">Priority:</label>
                <select class="form-control" id="new_alert_priority">
                  <option>Low</option>
                  <option>Medium</option>
                  <option>High</option>
                  <option>Extreme</option>
                </select>
            </div>
              <button type="submit" class="btn btn-warning">Add</button>
          </div>

          </form>
        </div>
      </div>

    @foreach(Auth::user()->alerts as $alert)
      <div class="card mt-5">
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
