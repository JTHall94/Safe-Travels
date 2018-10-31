@extends('templates.maintemplate')

  @section('AccountInfo')
    <div class="usercontent mt-5 mb-5">
      <h1 class="homeheadings">Account Info</h1>
      <div class="row ml-3 mr-3">
        <div class="col-sm-2 mr-0" id="homeuserimg">
            <div class="row">
              <div class ="ml-3 mt-2" id="photoplaceholder">
                <p>TEST PHOTO SPOT</p>
              </div>
            </div>
            <div class="row">
              <ul>
                <li>Username</li>
                <li>Joined</li>
              </ul>
            </div>
          </div>
        <div class="col" id="userinfo">
          <div class="card mb-5 mr-3">
              <div class="card-body">
                <h5 class="card-title">Full Name</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Phone Number</li>
                <li class="list-group-item">Email</li>
                <li class="list-group-item">Adress</li>
                <li class="list-group-item">Vehicle Info</li>
                <li class="list-group-item">Emergency Conctacts</li>
                <li class="list-group-item">Physical Description</li>
                <li class="list-group-item">Other</li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link">Edit</a>
              </div>
          </div>
        </div>
      </div>
    </div>


@stop
