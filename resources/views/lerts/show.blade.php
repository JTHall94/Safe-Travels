@extends('layouts.card')

@section('card-content')

  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mt-5">
        <div class="card-header text-center">{{$a->name}}</div>
        <div class="card-body">
          <div class="row">
            <div class="col">
              <label for="alertdisplaycreatorname" class="mt-2">Created By:</label>
              <input class="form-control mb-2" type="text" id="alertdisplaycreatorname" name="alertdisplaycreatorname" value="{{$u->name}}" readonly>
            </div>
            <div class="col">
              <label for="alertdisplaycreatoremail" class="mt-2">Creator Email:</label>
              <input class="form-control mb-2" type="text" id="alertdisplaycreatoremail" name="alertdisplaycreatoremail" value="{{$u->email}}" readonly>
            </div>
            <div class="col">
              <label for="alertdisplaycreatorphone" class="mt-2">Creator Email:</label>
              <input class="form-control mb-2" type="text" id="alertdisplaycreatorphone" name="alertdisplaycreatorphone" value="{{$u->phone}}" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="alertdisplaystart" class="mt-2">Alert Start:</label>
              <input class="form-control mb-2" type="text" id="alertdisplaystart" name="alertdisplaystart" value="{{$a->start}}" readonly>
            </div>
            <div class="col">
              <label for="alertdisplayend" class="mt-2">Alert End:</label>
              <input class="form-control mb-2" type="text" id="alertdisplayend" name="alertdisplayend" value="{{$a->end}}" readonly>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="alertdisplaydescription" class="mt-2">Description:</label>
              <textarea class="form-control mb-2" id="alertdisplaydescription" name="alertdisplaydescription" readonly>{{$a->description}}</textarea>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label class="mt-2">Location:</label>
            <g-map-display :alert='{!! $a->toJson() !!}'></g-map-display>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="taggedcontactdisplay" class="mt-2">Tagged Contacts:</label>
              @if($a->contacts)
                @foreach($a->contacts as $contact)
                  <input class="form-control mb-2" type="text" id="taggedcontactsdisplay" name="taggedcontactsdisplay" value="{{$contact->firstname}} {{$contact->lastname}}" readonly>
                @endforeach
              @endif
            </div>
          </div>
        </div>
    </div>
    </div>
  </div>

@endsection
