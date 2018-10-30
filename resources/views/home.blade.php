@include('head')

  <body>

    @include('header')

    <div class="container" id="pagecontent">

      <div class="usercontent mt-5 mb-5">
        <h1 class="homeheadings">User Info</h1>
        <div class="row">
          <div class="col" id="homeuserimg">
            <p>User Image will go here</p>
          </div>
          <div class="col-6">
            <p>Beginning of user information will go here</p>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p>Information for under the image</p>
          </div>
          <div class="col-6">
            <p>Card of more detailed information pulled from the user account page. Edit button takes to user account page with edit flagged already</p>
          </div>
        </div>
      </div>

      <div class="alertcontent mt-5 mb-5">
        <h1 class="homeheadings">Alerts</h1>
          <p>Here's where the list of active alerts will go. Clicking one will take you it's page with a more detailed view.</p>
          <p>(Or clicking one will expand it's view and display a card with more detailed information)</p>
          <p>Look at using either a table or populating the list with a foreach loop</p>


      </div>

      <div class="favcontactscontent mt-5 mb-5">
        <h1 class="homeheadings">Favorite Contacts</h1>
        <p>Utilize a table of favorite contacts specifically pulled from the more expansive contacts page</p>

      </div>






@include('footer')
