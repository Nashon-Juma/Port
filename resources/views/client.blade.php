<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My client</title>

    <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="css/client.css">
  <link rel="stylesheet" href="css/style.css">

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

</head>
<body>

  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="https://techmates.team">Techmates.team</a>

      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="/">Back Home</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->
  <center> <section class="contaz">
<div class="booking-form-w3layouts">
  <!-- Form starts here -->
  <form action="#" method="post">
    <h2 class="sub-heading-agileits">Booking Details</h2>
    <div class="main-flex-w3ls-sectns">
      <div class="field-agileinfo-spc form-w3-agile-text1">
        <select class="form-control">
          <option>Industry Type</option>
          <option value="Adipiscing">Healthcare</option>
          <option value="Lorem Ipsum">Automotive</option>
          <option value="Adipiscing">Manufacturing</option>
          <option value="Adipiscing">Education</option>
          <option value="Lorem Ipsum">Finance and Banking</option>
          <option value="Adipiscing">Retail and E-commerce</option>
          <option value="Lorem Ipsum">Entertainment and Media</option>
          <option value="Adipiscing">Aerospace and Aviation</option>
        </select>
      </div>
      <div class="field-agileinfo-spc form-w3-agile-text2">Thank You
        {{-- <select class="form-control">
          <option>To</option>
          <option value="Lorem Ipsum">Lorem Ipsum</option>
          <option value="Adipiscing">Adipiscing</option>
          <option value="Lorem Ipsum">Lorem Ipsum</option>
          <option value="Adipiscing">Adipiscing</option>
          <option value="Lorem Ipsum">Lorem Ipsum</option>
          <option value="Adipiscing">Adipiscing</option>
        </select> --}}
      </div>
    </div>
    <div class="main-flex-w3ls-sectns">
      <div class="field-agileinfo-spc form-w3-agile-text1">
        <select class="form-control">
          <option>Preferred Service</option>
          <option value="American Airline">American Airline</option>
          <option value="Delta Airlines">Delta Airlines</option>
          <option value="Frontier Airline">Frontier Airline</option>
          <option value="Jet Blue">Jet Blue</option>
          <option value="Southwest Airlines">Southwest Airlines</option>
        </select>
      </div>
      <div class="field-agileinfo-spc form-w3-agile-text2">
        <select class="form-control">
          <option>System Type</option>
          <option value="Window">Window</option>
          <option value="Aisle">Apple</option>
          <option value="Special">linux</option>
          <option value="all">All</option>
        </select>
      </div>
    </div>
    <div class="main-flex-w3ls-sectns">
      <div class="field-agileinfo-spc form-w3-agile-text1">
        <input
          id="datepicker"
          name="Text"
          type="text"
          placeholder="Preffered Date Of Completion"
          value=""
          onfocus="this.value = '';"
          onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
          required=""
          class="hasDatepicker"
        />
      </div>
      <div class="field-agileinfo-spc form-w3-agile-text2">
        {{-- <input
          type="text"
          id="timepicker"
          name="Time"
          class="timepicker form-control hasWickedpicker"
          placeholder="Departure Time"
          value=""
          onkeypress="return false;"
        /> --}}
      </div>
    </div>

    <div class="radio-section">
      <h6>Select your Choice</h6>
      <ul class="radio-buttons-w3-agileits">
        <li>
          <input type="radio" id="a-option" name="selector1" />
          <label for="a-option">Develop & Maintainance</label>
          <div class="check"></div>
        </li>
        <li>
          <input type="radio" id="b-option" name="selector1" />
          <label for="b-option">Develop Only</label>
          <div class="check">
            <div class="inside"></div>
          </div>
        </li>
        <li>
            <input type="radio" id="b-option" name="selector1" />
            <label for="c-option">To be Discussed</label>
            <div class="check">
              <div class="inside"></div>
            </div>
          </li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="main-flex-w3ls-sectns">
      <div class="field-agileinfo-spc form-w3-agile-text1">
        <input
          id="datepicker1"
          name="Text"
          type="text"
          placeholder="Do you want a one-to-one meeting  pride a date...(Optional)"
          value=""
          onfocus="this.value = '';"
          onblur="if (this.value == '') {this.value = 'dd/mm/yyyy';}"
          required=""
          class="hasDatepicker"
        />
      </div>
      <div class="field-agileinfo-spc form-w3-agile-text2">

      </div>
    </div>
    <div class="field-agileinfo-spc form-w3-agile-text">
      <textarea name="Message" placeholder="Any Message..."></textarea>
    </div>
    <h3 class="sub-heading-agileits">Personal Details</h3>
    <div class="main-flex-w3ls-sectns">
      <div class="field-agileinfo-spc form-w3-agile-text1">
        <input type="text" name="Name" placeholder="Full Name" required="" />
      </div>
      <div class="field-agileinfo-spc form-w3-agile-text2">
        <input
          type="text"
          name="Phone no"
          placeholder="Phone Number"
          required=""
        />
      </div>
    </div>
    <div class="field-agileinfo-spc form-w3-agile-text">
      <input type="email" name="Email" placeholder="Email" required="" />
    </div>
    <div class="clear"></div>
    <input type="submit" value="Submit" />
    <input type="reset" value="Clear Form" />
    <div class="clear"></div>
  </form>
  <!--// Form starts here -->
</div>
  </section>

</body>
</html>
