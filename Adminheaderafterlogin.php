<!DOCTYPE html>
<html lang="en">
<head>
<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
<title>Air Pollution</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Landing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
  
  <!-- animation css files -->
  <link rel="stylesheet" href="css/animation-aos.css">
  <link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
  <!-- //animation css files -->

  <!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/fontawesome-all.css" rel="stylesheet"><!-- fontawesome css -->
  <!-- //css files -->
  
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
  <!-- //google fonts -->
  
</head>
<body>

<!-- header -->
<header class="index-banner">
    <!-- nav -->
    <nav class="main-header">
      <div id="brand" data-aos="zoom-in-up">
        <div id="logo">
          <img src="images/AirPollutionLogo.png" width="70" height="70">
          
        </div>
        <div id="word-mark">
          <h1>
            <a href="index.html">AIR POLLUTION</a>
          </h1>
        </div>
      </div>
      <div id="menu">
        <div id="menu-toggle">
          <div id="menu-icon">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </div>
        <ul class="text-center text-capitalize nav-agile" data-aos="zoom-in-up">
          <li>
            <a href="StaffLogOut.php">Log out</a>
          </li>
          <li>
            <a href="StaffRegister.php">Register</a>
          </li>
          <li>
            <a href="CountryRegister.php">Country Register</a>
          </li>
          <li>
            <a href="ViewQuestion.php">Answer</a>
          </li>
          
          <li>
            <button type="button" class="btn w3ls-btn"><a href="UserLogin.php">User</a>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- //nav -->
  <!-- banner -->
  <div class="banner layer" id="home">
    <div class="container">
      <div class="row banner-text">
        <div class="slider-info col-lg-8">
          <div class="agileinfo-logo mt-5">
            <h2 data-aos="fade-down">
              <img src="images/AirPollutionLogo.png" width='100' height='100'><br> Modern problem of the global today -
            </h2>
          </div>
          <h3 class="txt-w3_agile" data-aos="fade-down">Bring the knowledge of air pollution to you </h3>
        </div>
        <!-- <div class="col-lg-4 col-md-8 mt-lg-0 mt-5 banner-form" data-aos="fade-left">
          <h5><i class="fas mr-2 fa-laptop"></i> Register Now</h5>
          <form action="#" class="mt-4" method="post">
            <input class="form-control" type="text" name="Name" placeholder="Name" required="" />
            <input class="form-control" type="email" name="Email" placeholder="Email" required="" />
            <input class="form-control" type="text" name="Number" placeholder="Phone Number" required="" />
            <input class="form-control" type="password" name="Number" placeholder="Password" required="" />
            <input class="form-control text-capitalize" type="submit" value="Register Account">
          </form>
        </div>
      </div>
    </div>
  </div> -->
  <!-- //banner -->
</header>
<!-- //header -->

<!-- banner bottom -->
