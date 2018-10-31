@include('includes/head')

  <body class="container">

    <div id="loginblock">
      <div id="logintitle">
        <div class="row">
          <h1 class="mt-3 mb-5" id="loginheading">Safe Travels</h1>
        </div>
      </div>
      <div id="loginfields">
        <div class="row">
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
              <div class="form-check p-0">
                <p>Don't have an account? <a href="/signup">Sign</a> up here!</p>
              </div>
              <button type="submit" class="btn btn-primary mb-5">Submit</button>
            </form>
        </div>
      </div>
    </div>





@include('includes/footer')
