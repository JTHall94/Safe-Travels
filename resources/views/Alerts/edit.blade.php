@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">Edit Alert</div>
        <div class="card-body">
          <form id="editContact" action="/alerts/{{ $a->id }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
              <div class="col">
                  <div class="form-group">
                    <label for="new_alert_name" class="font-weight-bold">Name:</label>
                    <input type="text" class="form-control" id="new_alert_name" name="new_alert_name" placeholder="Name..." value="{{ old('new_alert_name') ? old('new_alert_name') : $a->name }}">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label for="new_alert_datein" class="mt-2 font-weight-bold">Date In:</label>
                    <datetime type="date" v-model="datetime" id="new_alert_datein" name="new_alert_datein" placeholder="Select Date" value="{{ old('new_alert_datein') ? old('new_alert_name') : $a->name }}"></datetime>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                    <label for="new_alert_dateout" class="mt-2 font-weight-bold">Date Out:</label>
                    <datetime type="date" v-model="datetime" id="new_alert_dateout" name="new_alert_dateout" placeholder="Select Date" value="{{ old('new_alert_dateout') ? old('new_alert_dateout') : $a->dateout }}"></datetime>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label for="new_alert_intime" class="mt-2 font-weight-bold">Time In:</label>
                    <datetime type="time" v-model="datetime" id="new_alert_intime" name="new_alert_intime" placeholder="Select Time" value="{{ old('new_alert_intime') ? old('new_alert_intime') : $a->intime }}"></datetime>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                    <label for="new_alert_timeout" class="mt-2 font-weight-bold">Time Out:</label>
                    <datetime type="time" v-model="datetime" id="new_alert_timeout" name="new_alert_timeout" placeholder="Select Time" value="{{ old('new_alert_timeout') ? old('new_alert_timeout') : $a->timeout }}"></datetime>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label for="new_alert_description" class="mt-2 font-weight-bold">Description:</label>
                    <textarea class="form-control mb-2" id="new_alert_description" name="new_alert_description" placeholder="Description...">{{ old('new_alert_description') ? old('new_alert_description') : $a->description }}</textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label for="new_alert_location" class="mt-2 font-weight-bold">Location:</label>
                    <input class="form-control mb-2" type="text" id="new_alert_location" name="new_alert_location" value="{{ old('new_alert_location') ? old('new_alert_location') : $a->location }}" placeholder="Location...">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                  <tagged-contacts :contacts='{!! $contacts = App\Contacts::where('user_id', '1')->get(); $contacts->toJson() !!}'></tagged-contacts>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label for="new_alert_priority" class="font-weight-bold">Priority:</label>
                    <select class="form-control" id="new_alert_priority" name="new_alert_priority" value="{{ old('new_alert_priority') ? old('new_alert_priority') : $a->priority }}">
                      <option>Low</option>
                      <option>Medium</option>
                      <option>High</option>
                      <option>Extreme</option>
                    </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <a href="/alerts" class="btn btn-warning">Cancel</a>
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary float-right">Update</button>
              </div>
            </div>
          </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>

@endsection
