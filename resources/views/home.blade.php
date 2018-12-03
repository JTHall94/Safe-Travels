@extends('layouts.card')

@section('card-content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-2 mb-5">
                <div class="card-body">
                    @include('includes.errorflash')
                  <h4 class="text-center">Dashboard</h4>
                  <p>This is your dashboard! Here you can quickly access your profile information, contact list, and alert data by following the links below.</p>
                  <p>Additionally, this page also lists any alerts you have that are set to end on today's date. To edit or resolve those alerts, or create a new alert, please navigate to the alert page.</p>
                  <h4><a href="/profile">Profile</a></h4> <h4><a href="/alerts">Alerts</a></h4> <h4><a href="/contacts">Contacts</a></h4>
                </div>
            </div>

@foreach(Auth::user()->alerts()->orderBy('end', 'desc')->limit(3)->get() as $alert)

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
                    @foreach($alert->contacts as $contact)
                      <input class="form-control mb-2" type="text" id="taggedcontactsdisplay" name="taggedcontactsdisplay" value="{{$contact->firstname}} {{$contact->lastname}}" readonly>
                    @endforeach
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label class="mt-2">Location:</label>
                    <g-map-display :alert='{!! $alert->toJson() !!}'></g-map-display>
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
                        <button class="btn btn-danger" type="submit">Resolve</i></button>
                      </form>
                  </div>
              </div>
            </div>
          </div>

@endforeach

@endsection
