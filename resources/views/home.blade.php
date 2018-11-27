@extends('layouts.card')

@section('card-content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-2 mb-5">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @include('includes.errorflash')

                    You are logged in!
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">Profile</div>
                <div class="card-body">
                  <p>Here is where profile information is going to go. An edit link will take the user to the profile edit page.</p>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">Alerts</div>
                <div class="card-body">
                  <p>Here is where alert information will be displayed. Will display most imminent alert with standard links, and will include a see more link to the actual alerts index.</p>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">Contacts</div>
                <div class="card-body">
                  <p>Here is where top 5 favorite contacts will be displayed.</p>
                </div>
            </div>

        </div>
    </div>

@endsection
