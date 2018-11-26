@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Edit Alert</div>
        <div class="card-body">
          <form id="editContact" action="/alerts/{{ $a->id }}" method="post">
            @csrf
            @method('PUT')
              <div class="form-group">
                  <label for="new_alert_name" class="mt-2">Name:</label>
                  <input class="form-control mb-2" type="text" id="new_alert_name" name="new_alert_name" value="{{ old('new_alert_name') ? old('new_alert_name') : $a->name }}" placeholder="Name...">

                  <label for="new_alert_intime" class="mt-2">Time In:</label>
                  <input class="form-control mb-2" type="text" id="new_alert_intime" name="new_alert_intime" value="{{old('new_alert_intime') ? old('new_alert_intime') : $a->intime }}" placeholder="Time In...">

                  <label for="new_alert_timeout" class="mt-2">Time Out:</label>
                  <input class="form-control mb-2" type="text" id="new_alert_timeout" name="new_alert_timeout" value="{{old('new_alert_timeout') ? old('new_alert_timeout') : $a->timeout }}" placeholder="Time Out...">

                  <label for="new_alert_priority" class="mt-2">Priority:</label>
                  <input class="form-control mb-2" type="text" id="new_alert_priority" name="new_alert_priority" value="{{old('new_alert_priority') ? old('new_alert_priority') : $a->priority }}" placeholder="Priority...">

                  <label for="new_alert_description" class="mt-2">Description:</label>
                  <textarea class="form-control mb-2" id="new_alert_description" name="new_alert_description" placeholder="Description...">{{old('new_alert_description') ? old('new_alert_description') : $a->description }}</textarea>

                  <label for="new_alert_location" class="mt-2">Location:</label>
                  <input class="form-control mb-2" type="text" id="new_alert_location" name="new_alert_location" value="{{old('new_alert_location') ? old('new_alert_location') : $a->location }}" placeholder="Location...">

                  <button type="submit" class="btn btn-primary float-right">Update</button>

              </div>
        </div>
      </div>
    </div>
  </div>

@endsection
