@include('includes/head')

<body>

  @include('includes/header')

  <div class="container" id="signupblock">
      <div id="signuptitle">
        <div class="row">
          <h1 class="mt-3 mb-5" id="heading">Sign Up!</h1>
        </div>
      </div>
      <div id="signupfields">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="loginInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="loginInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputName">Name</label>
                  <input type="name" class="form-control" id="loginInputName" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPhone">Phone Number</label>
                  <input type="Phonenumber" class="form-control" id="loginInputPhone" placeholder="Phone Number">
                </div>
                <div class="form-group">
                  <label for="exampleInputAddress">Address</label>
                  <input type="Address" class="form-control" id="loginInputAddress" placeholder="Physical Address">
                </div>
                <button type="submit" class="btn btn-primary mb-5">Submit</button>
              </form>
      </div>
    </div>
  </div>




















@include('includes/footer')
