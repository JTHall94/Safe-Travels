@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-center">Alert List <span class="float-right"><p><a data-toggle="collapse" href="#addForm">New Alert</a></p></span></div>
        <div class="card-body">
          <p>This is where a list of your alerts will be displayed.</p>
          <form id="addForm" class="collapse form clearfix pb-3 {{ $errors->any() ? 'show' : '' }}" action="" method="post">
            @csrf
            <div class="row">
              <div class="col">
                  <div class="form-group">
                    <label for="alert_name" class="font-weight-bold">Name:</label>
                    <input type="text" class="form-control" id="alert_name" name="alert_name" placeholder="Name..." value="{{ old('alert_name') }}">
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label for="alert_datein" class="mt-2 font-weight-bold">Date In:</label>
                    <datetime type="date" v-model="datetime" id="alert_datein" name="alert_datein" placeholder="Select Date"></datetime>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                    <label for="alert_dateout" class="mt-2 font-weight-bold">Date Out:</label>
                    <datetime type="date" v-model="datetime" id="alert_dateout" name="alert_dateout" placeholder="Select Date"></datetime>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label for="alert_intime" class="mt-2 font-weight-bold">Time In:</label>
                    <datetime type="time" v-model="datetime" id="alert_intime" name="alert_intime" placeholder="Select Time"></datetime>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                    <label for="alert_timeout" class="mt-2 font-weight-bold">Time Out:</label>
                    <datetime type="time" v-model="datetime" id="alert_timeout" name="alert_timeout" placeholder="Select Time"></datetime>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label for="alert_description" class="mt-2 font-weight-bold">Description:</label>
                    <textarea class="form-control mb-2" id="alert_description" name="alert_description" placeholder="Description...">{{old('new_alert_description')}}</textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label for="alert_location" class="mt-2 font-weight-bold">Location:</label>
                    <input class="form-control mb-2" type="text" id="alert_location" name="alert_location" value="{{old('alert_location')}}" placeholder="Location...">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                  <tagged-contacts :contacts='{!! $contacts->get()->toJson() !!}'></tagged-contacts>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group">
                    <label for="alert_priority" class="font-weight-bold">Priority:</label>
                    <select class="form-control" id="alert_priority" name="alert_priority">
                      <option disabled selected>Select Priority Level</option>
                      <option>Low</option>
                      <option>Medium</option>
                      <option>High</option>
                      <option>Extreme</option>
                    </select>
                </div>
              </div>
            </div>
              <button type="submit" class="btn btn-warning">Add</button>
          </div>

          </form>
        </div>

    @foreach(Auth::user()->alerts as $alert)
      <div class="card mt-5">
        <div class="card-header text-center">{{$alert->name}}</div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <label for="alertdisplaydatein" class="mt-2">Date In:</label>
              <input class="form-control mb-2" type="text" id="alertdisplaydatein" name="alertdisplaydatein" value="{{$alert->datein}}" readonly>
            </div>
            <div class="col">
              <label for="alertdisplaydateout" class="mt-2">Date Out:</label>
              <input class="form-control mb-2" type="text" id="alertdisplaydateout" name="alertdisplaydateout" value="{{$alert->dateout}}" readonly>
            </div>
          </div>
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
          <div class="row">
            <div class="col">
              <label for="taggedcontactdisplay" class="mt-2">Tagged Contacts:</label>
              @foreach($alert->contacts as $contact)
                <input class="form-control mb-2" type="text" id="taggedcontactsdisplay" name="taggedcontactsdisplay" value="{{$contact->firstname}} {{$contact->lastname}}" readonly>
              @endforeach
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
    </div>
    @endforeach


  </div>
</div>

@endsection
