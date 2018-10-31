@extends('templates.maintemplate')

  @section('CreateContact')
    <div class="usercontent mt-5 mb-5">
      <h1 class="homeheadings">Create a Contact</h1>
      <form class="ml-5 mr-5 mb-5">
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Phone Number</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email Address</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Email Address">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Relation</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Relationship">
          </div>
          <button type="submit" class="btn btn-primary mb-5">Submit</button>
      </form>
    </div>
  @stop

  @section('ContactList')
    <div class="usercontent mt-5 mb-5">
      <h1 class="homeheadings">Contacts Table</h1>
      <div class="ml-5 mr-5">
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
    </div>
  @stop
