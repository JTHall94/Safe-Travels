@include('includes/head')

<body>

  @include('includes/header')

  <div class="container" id="pagecontent">

    <div class="alertcontent mt-5 mb-5">
      <h1 class="homeheadings">Create Alert</h1>
      <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>




      <!-- p>This field will only become visible when the add alert ('+') button is clicked</p>
      <p>It will consist mainly of a form, with all of the required fields for building and alert,<p>
      <p>as well as the functionality required to drop a geographic pin (special functionality) </p>
      <p>When the add button is hit at the bottom of the form, this field will disappear and the list will be updated</p -->


    </div>

    <div class="usercontent mt-5 mb-5">
      <h1 class="homeheadings">Alerts</h1>
      <p>This will consist of a list of active alerts that can be expanded into cards (much like on the home page) </p>
      <p>Maybe consider creating a list of the expanded cards (for easier, more detailed viewing specific to this page) </p>
      <p>Each alert should have an option to delete (are you sure popup included), (possibly)expand, and edit. </p>
    </div>












  @include('includes/footer')
