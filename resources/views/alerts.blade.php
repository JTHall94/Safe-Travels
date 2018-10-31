@extends('templates.maintemplate')


    <!-- NOTE: MARGINS -->
  @section('CreateAlert')
          <div class="alertcontent mt-5 mb-5">
            <h1 class="homeheadings">Create Alert</h1>
            <form>
              <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                      <label for="alertname">Name</label>
                      <input type="name" class="form-control" id="alertname" aria-describedby="alertn" placeholder="Enter Name for Alert">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                      <label for="StartTime">Start Time</label>
                      <select class="form-control" id="StartTime">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                      <label for="Alarm Time">Alarm Time</label>
                      <select class="form-control" id="AlarmTime">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Low</label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Medium</label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">High</label>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col">
                  <div class="form-group">
                    <label for="alertDescription">Description</label>
                    <textarea class="form-control" id="alertDescription" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
          </div>
          <div class="row">
            <div class="col">
              <p>This is where the google maps functionality will be integrated</p>
            </div>
          </div>
        </div>
  @stop

  @section('AlertList')
    <div class="usercontent mt-5 mb-5">
      <h1 class="homeheadings">Alerts</h1>
      <div class="row">
        <div class="col">
          <div class="card mt-2 mb-5 mr-5 ml-5">
              <div class="card-body">
                <h5 class="card-title">Full Name</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Name</li>
                <li class="list-group-item">Start Time</li>
                <li class="list-group-item">Alarm Time</li>
                <li class="list-group-item">Priority</li>
                <li class="list-group-item">Description</li>
                <li class="list-group-item">Maps</li>

              </ul>
              <div class="card-body">
                <a href="#" class="card-link">More...</a>
                <a href="#" class="card-link">Edit</a>
              </div>
          </div>
        </div>
  @stop
