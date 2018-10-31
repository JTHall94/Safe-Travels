@include('includes/head')

    <nav class="navbar navbar-expand-lg">
      <div class="navbar-header">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bars"></i>
              </a>
              <!--div class="collapse navbar-collapse" id="navbarSupportedContent"-->
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/home">Home</a>
                  <a class="dropdown-item" href="/alerts">Alerts</a>
                  <a class="dropdown-item" href="/contacts">Contacts</a>
                  <a class="dropdown-item" href="/account">Account</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Logout</a>
                </div>
              <!--/div-->
            </li>
          </ul>

              <a class="navbar-brand" href="#"><strong>Safe Travels</strong></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        </div>
        <!-- Code to add a search field -->
          <!--form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form-->
      <!--/div-->
    </nav>

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
