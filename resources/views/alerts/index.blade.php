@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-4">
        <div class="card-body">
          <h4 class="text-center">Alert List</h4>
          <p>This page displays a list of all of your alerts. You can edit or resolve them with the buttons at the bottom of each alert.</p>
          <p>If you would like to create a new alert, click the link below.</p>
           @if (session('status'))
             <div class="alert alert-success" role="alert">
                 {{ session('status') }}
             </div>
         @endif
         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
          <h5 class="text-center"><a data-toggle="collapse" href="#addForm">New Alert</a></h5>
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
                    <label for="alert_start" class="mt-2 font-weight-bold">Alert Start:</label>
                    <datetime type="datetime" v-model="datetimestart" id="alert_start" name="alert_start" placeholder="Select Start..."></datetime>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                    <label for="alert_end" class="mt-2 font-weight-bold">Alert End:</label>
                    <datetime type="datetime" v-model="datetimeend" id="alert_end" name="alert_end" placeholder="Select End..."></datetime>
                </div>
              </div>
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
                  <tagged-contacts :contacts='{!! $contacts->get()->toJson() !!}'></tagged-contacts>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label class="mt-2">Location:</label>
                <g-map></g-map>
              </div>
            </div>
              <button type="submit" class="btn btn-primary float-right mt-2">Add</button>
          </div>


          </form>
        </div>

    @foreach(Auth::user()->alerts()->orderBy('end', 'desc')->get() as $alert)
      <div class="card mt-5">
        <div class="card-header text-center">{{$alert->name}} @if($alert->end < $carbon) (OVERDUE) @endif</div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <label for="alertdisplaystart" class="mt-2">Alert Start:</label>
              <input class="form-control mb-2" type="text" id="alertdisplaystart" name="alertdisplaystart" value="{{$alert->start}}" readonly>
            </div>
            <div class="col">
              <label for="alertdisplayend" class="mt-2">Alert End:</label>
              <input class="form-control mb-2" type="text" id="alertdisplayend" name="alertdisplayend" value="{{$alert->end}}" readonly>
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
              <label for="taggedcontactdisplay" class="mt-2">Tagged Contacts:</label>
              @if($alert->contacts)
                @foreach($alert->contacts as $contact)
                <div class="row">
                  <div class="col">
                    <input class="form-control mb-2" type="text" id="taggedcontactsdisplay" name="taggedcontactsdisplay" value="{{$contact->firstname}} {{$contact->lastname}}" readonly>
                  </div>
                </div>
                @endforeach
              @endif
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label class="mt-2">Location:</label>
              <g-map-display :alert='{!! $alert->toJson() !!}'></g-map-display>
            </div>
          </div>
            <a href="alerts/{{ $alert->id }}/edit" class="btn btn-primary float-right mt-2">Edit</a>
            <form action="/alerts/{{ $alert->id }}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger mt-2" type="submit">Resolve</i></button>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection
