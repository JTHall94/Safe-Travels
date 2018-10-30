@include('head')

<body>

  @include('header')

  <div class="container" id="pagecontent">

    <div class="usercontent mt-5 mb-5">
      <h1 class="homeheadings">Create a Contact</h1>
      <p>This will display a form with fields for all of the contact info. On add or cancel the form will disappear. Adding adds the info to the
       table below. </p>
    </div>


    <div class="usercontent mt-5 mb-5">
      <h1 class="homeheadings">Contacts Table</h1>
      <p>This will be a pretty straightforward table displaying a contacts name, phone number, and email. As well as buttons to favorite, </p>
      <p>which will seamlessly add the contact to the favorites table (and show a highlighted button) on the home page, edit, and delete. </p>
      <p>Upon clicking on the contact, the view will change to show an expanded card which will have fields for descriptions, relationship, etc </p>
      <p>Edit will show the create a contact field with the information already filled in, but editable. </p>
      <p>Should be a + button to display the create a contact form</p>
    </div>








  @include('footer')
