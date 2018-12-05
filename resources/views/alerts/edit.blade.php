@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-4">
        <div class="card-body">
          <h4 class="text-center">Edit Alert</h4>
          <p>This page displays the data for the alert you are editing. Alert start and end points must be re-entered to ensure alert accuracy.</p>
          <p>For full integration with Safe Travels, all fields must be filled out.</p>
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
        <div class="card-header text-center">Alert</div>
        <div class="card-body">
          <form id="editAlert" action="/alerts/{{ $a->id }}" method="post">
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
                    <label for="new_alert_start" class="mt-2 font-weight-bold">Alert Start:</label>
                    <datetime type="datetime" v-model="datetimestart" id="new_alert_start" name="new_alert_start" placeholder="Select Start"></datetime>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                    <label for="new_alert_end" class="mt-2 font-weight-bold">Alert End:</label>
                    <datetime type="datetime" v-model="datetimeend" id="new_alert_end" name="new_alert_end" placeholder="Select End"></datetime>
                </div>
              </div>
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
                <div class="form-group">
                    <label for="new_alert_description" class="mt-2 font-weight-bold">Description:</label>
                    <textarea class="form-control mb-2" id="new_alert_description" name="new_alert_description" placeholder="Description...">{{ old('new_alert_description') ? old('new_alert_description') : $a->description }}</textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                  <tagged-contacts :contacts='{!! $contacts->get()->toJson() !!}' :tags='{!! $tags->toJson() !!}'></tagged-contacts>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <g-map-edit :alert='{!! $a->toJson() !!}'></g-map-edit>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col">
                <a href="/alerts" class="btn btn-danger">Cancel</a>
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
