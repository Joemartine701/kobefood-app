<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" name="csrf-token" content="{{ csrf_token() }}">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- Site Metas -->
  <title>{{ config('app.name', 'KOBE FOOD PRODUCTS') }}</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Site Icons -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Pogo Slider CSS -->
  <link rel="stylesheet" href="css/pogo-slider.min.css">
  <!-- Site CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">


</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">


  <!-- Start top bar -->
  <div class="main-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-top">
            {{-- <a class="new-btn-d br-2" href="#"><span>Book Appointment</span></a>
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> demo@gmail.com</a></div>  --}}
            <div class=" new-btn-d br-2" id="demo">
              <h5 class="bold text-left" id="date" style="font-size: 15px;font-weight: 600;"></h5>
              <h5 class="bold text-left" id="time" style="font-size: 15px;font-weight: 600;"></h5>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="wel-nots">
            <div class="row no-gutters mt-3 align-items-center">
              <div class="col-10">
                <!-- <input class="form-control border-secondary rounded-pill pr-5" type="search" value="search" id="example-search-input2"> -->
              </div>
              <div class="col-auto">
                <!-- <button class="btn text-dark border-0 rounded-pill ml-n5" type="button">
                                    <i class="fa fa-search"></i> -->
                <!-- </button> -->
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- End top bar -->

  <!-- Start header -->
  <header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="images/foodkobe1.png" alt="image"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
          <ul class="navbar-nav">
            <li><a class="nav-link active" href="/">Home</a></li>
            <!-- <li><a class="nav-link" href="#gallery">Gallery</a></li> -->
            <li><a class="nav-link" href="#">SERVICES</a></li>
            <li><a class="nav-link" href="/productAll">PRODUCTS</a></li>
            <li><a class="nav-link" href="/aboutUs">ABOUT US</a></li>
            <li><a class="nav-link" href="/contactUs">CONTACT US</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- End header -->
  @yield('body')


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-2 col-sm-4 col-xs-6">

            <div class="row" style="padding-left: 3%;padding-right:3%;">
              <div class="service-time middle">
                <h4>Working Hours</h4>
                <div class="time-table-section">
                  <ul>
                    <li><span class="left">Monday - Friday</span><span class="right">8:00 – 18:00</span></li>
                    <li><span class="left">Saturday</span><span class="right">8:00 – 16:00</span></li>
                    <li><span class="left">Sunday</span><span class="right">8:00 – 13:00</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-8 footer-contact">
            <h3>KOBE FOOD<span>.</span></h3>
            <p>
              P.O.BOX 00000<br>
              Igoma,Mwanza Mjini <br>
              Mwanza,Tanzania <br><br>
              <strong>Phone:</strong> +255 758 904 721<br>
              <strong>Email:</strong> kobemchele@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-4 col-md-8 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="/aboutUs">About us</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="/productAll">Products</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="/contactUs">Contact</a></li>
            </ul>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="fa fa-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-4 col-md-8 footer-links">
            <h4>Our Social Networks</h4>
            <p>You can follow us on the following social networks.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <!-- <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Trusted Technology</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="#">trusted technology</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

  <!-- ALL JS FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.pogo-slider.min.js"></script>
  <script src="js/slider-index.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/TweenMax.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/form-validator.min.js"></script>
  <script src="js/contact-form-script.js"></script>
  <script src="js/isotope.min.js"></script>
  <script src="js/images-loded.min.js"></script>
  <script src="js/custom.js"></script>
  <script>
    // DATE AND TIME

    var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']; //array of days
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'] //array of months
    var date = new Date(); //creating Date object
    var currentDay = days[date.getDay()]; //determining day using the array and method 
    var currentMonth = months[date.getMonth()]; //determining month using the array and method
    var currentDate = date.getDate(); //current date
    var currentYear = date.getFullYear(); //current year
    document.getElementById('date').innerHTML = currentDay + ", " + currentMonth + " " + currentDate + ", " + currentYear + "</br";
    var hrs = date.getHours(),
      min = date.getMinutes(); //current time (hours and minutes)
    var suffix = 'AM';
    if (hrs >= 12) {
      hrs -= 12;
      suffix = 'PM';
    }
    if (hrs < 10) {
      hrs = "0" + hrs;
    }
    if (min < 10) {
      min = "0" + min;
    }
    document.getElementById('time').innerHTML = hrs + ": " + min + " " + suffix + "</br";
  </script>



</body>

</html>