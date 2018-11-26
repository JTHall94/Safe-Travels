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
                  <p>Here is where alert information will be displayed. Probably will only display one or two active alerts (if any) with a "see more option" and the ability to go the actual alerts page to edit/delete/create</p>
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">Contacts</div>
                <div class="card-body">
                  <p>Here is where some of the contacts will be displayed. Possibly a favorites list. See more will take you to actual contacts index.</p>
                </div>
            </div>

        </div>
    </div>

@endsection
