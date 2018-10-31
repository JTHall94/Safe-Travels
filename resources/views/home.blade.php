@extends('templates.maintemplate')

      <!-- NOTE: Edit button should link to account page, which will be an editable form. When clicking that link, the form will be ready to edit.
          If you navigate normally to the account page, the form will be readonly, but clicking edit on that page will switch it into editable mode
          as well. -->
  @section('UserHome')
      <div class="usercontent mt-5 mb-5">
        <h1 class="homeheadings">User Info</h1>
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
              <div class="card mt-2 mb-5 mr-5">
                  <div class="card-body">
                    <h5 class="card-title">Full Name</h5>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">Phone Number</li>
                    <li class="list-group-item">Email</li>
                    <li class="list-group-item">Adress</li>
                    <li class="list-group-item">Vehicle Info</li>
                    <li class="list-group-item">Physical Description</li>
                    <li class="list-group-item">Other</li>

                  </ul>
                  <div class="card-body">
                    <a href="#" class="card-link">More...</a>
                    <a href="#" class="card-link">Edit</a>
                  </div>
              </div>
            </div>
          </div>
        </div>
  @stop


      <!-- NOTE: Table margins are acting up -->
  @section('UserAlerts')
      <div class="alertcontent">
        <h1 class="homeheadings">Alerts</h1>
        <table class="table">
            <thead class="mt-2">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Date</th>
                <th scope="col">Alarm Time</th>
                <th scope="col">Priority</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Hiking Trip</td>
                <td>10-30-2018</td>
                <td>5:00PM</td>
                <td>Medium</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Walking Home from Library</td>
                <td>10-31-2018</td>
                <td>9:00PM</td>
                <td>High</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Kayaking</td>
                <td>10-05-2018</td>
                <td>2:00PM</td>
                <td>Medium</td>
              </tr>
            </tbody>
            </table>
      </div>
  @stop

  @section('UserFavs')
      <div class="favcontactscontent mt-5 mb-5">
        <h1 class="homeheadings">Favorite Contacts</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
      </div>
  @stop
