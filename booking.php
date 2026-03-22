<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Trend's Place">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="Book your stay at Trend's Place Hotel & Suites Abuja." />
  <meta name="keywords" content="hotel booking, Abuja hotel, Trend's Place" />

  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500i,700|Roboto:300,400,500,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/vendor/icomoon/style.css">
  <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
  <link rel="stylesheet" href="css/vendor/aos.css">
  <link rel="stylesheet" href="css/vendor/animate.min.css">
  <link rel="stylesheet" href="css/vendor/bootstrap.css">
  <link rel="stylesheet" href="css/vendor/jquery.fancybox.min.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">

  <title>Book Now | Trend's Place Hotel & Suites</title>
  <style>
    .booking-form-wrap {
      background: #fff;
      padding: 50px;
      -webkit-box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.05);
      box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.05);
    }
    .untree_co--site-hero.inner-page.small-hero, 
    .untree_co--site-hero.inner-page.small-hero > .container > .row {
      height: 40vh;
      min-height: 300px;
    }
    .small-hero .hero-heading {
      font-size: 3.5rem !important;
    }
  </style>
</head>

<body>

  <div id="untree_co--overlayer"></div>
  <div class="loader">
    <div class="loader-logo"><img src="images/logotp.png" alt="Trend's Place Logo"></div>
  </div>


    <?php $headerClass = 'dark'; include 'includes/header.php'; ?>

    <div class="untree_co--site-wrap">

    <main class="untree_co--site-main">


      <div class="untree_co--site-hero inner-page overlay small-hero" style="background-image: url('images/slider_1.jpg');">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center">
              <div class="site-hero-contents" data-aos="fade-up">
                <h1 class="hero-heading text-white">Book Your Stay</h1>
                <div class="sub-text">
                  <p class="text-white">Experience the perfect blend of luxury and comfort in the heart of Abuja.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="untree_co--site-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="booking-form-wrap" data-aos="fade-up">
                <h3 class="mb-4">Reservation Details</h3>
                <form action="#">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="fname">First Name *</label>
                      <input type="text" id="fname" class="form-control" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="lname">Last Name *</label>
                      <input type="text" id="lname" class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="email">Email Address *</label>
                      <input type="email" id="email" class="form-control" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="phone">Phone Number *</label>
                      <input type="text" id="phone" class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="checkin">Check-in Date *</label>
                      <input type="date" id="checkin" class="form-control" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="checkout">Check-out Date *</label>
                      <input type="date" id="checkout" class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="room_type">Room Type *</label>
                      <select name="room_type" id="room_type" class="form-control" required>
                        <option value="">Select Room Type</option>
                        <option value="ambassadorial">Ambassadorial Suite</option>
                        <option value="queens">Queens Royal</option>
                        <option value="business">Business Royal</option>
                        <option value="executive">Executive Deluxe</option>
                        <option value="standard">Standard Room</option>
                      </select>
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="adults">Adults</label>
                      <select name="adults" id="adults" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4+</option>
                      </select>
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="children">Children</label>
                      <select name="children" id="children" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3+</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Special Requests</label>
                      <textarea name="message" id="message" class="form-control" cols="30" rows="5" placeholder="Extra bed, airport pickup, etc."></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <input type="submit" value="Confirm Booking" class="btn btn-black px-5 text-white btn-block">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-5 ml-auto">
              <div class="quick-contact-item d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="100">
                <img src="images/room_1_a.jpg" alt="Ambassadorial Suite Preview" class="img-fluid mr-4" style="max-width: 150px;">
                <div>
                  <h3 class="h5">Ambassadorial Suite</h3>
                  <p>Our most luxurious offering starting from ₦120,000.</p>
                </div>
              </div>
              <div class="quick-contact-item d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="200">
                <img src="images/room_1_b.jpg" alt="Queens Royal Preview" class="img-fluid mr-4" style="max-width: 150px;">
                <div>
                  <h3 class="h5">Queens Royal</h3>
                  <p>Elegant and spacious starting from ₦95,000.</p>
                </div>
              </div>
              <div class="quick-contact-item d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="300">
                <img src="images/room_2_a.jpg" alt="Business Royal Preview" class="img-fluid mr-4" style="max-width: 150px;">
                <div>
                  <h3 class="h5">Business Royal</h3>
                  <p>Perfect for corporate stays starting from ₦90,000.</p>
                </div>
              </div>
              
              <div class="mt-5" data-aos="fade-up" data-aos-delay="400">
                <img src="images/img_1.jpg" alt="Hotel Interior" class="img-fluid mb-4 rounded">
                <h3 class="h4">Your Comfort is Our Priority</h3>
                <p>Enjoy 24/7 security, high-speed WiFi, and our premium rooftop bar during your stay at Trend's Place Hotel & Suites.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="untree_co--site-section pt-0">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-lg-6 text-center">
              <h2 class="display-4">Explore Trend's Place</h2>
              <p>Take a glimpse into our world of luxury and elegance.</p>
            </div>
          </div>
          <div class="row gutter-2">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
              <a href="images/slider_1.jpg" data-fancybox="gallery"><img src="images/slider_1.jpg" alt="Hotel Slider 1" class="img-fluid rounded"></a>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
              <a href="images/slider_2.jpg" data-fancybox="gallery"><img src="images/slider_2.jpg" alt="Hotel Slider 2" class="img-fluid rounded"></a>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <a href="images/room_1_a.jpg" data-fancybox="gallery"><img src="images/room_1_a.jpg" alt="Room 1 Preview" class="img-fluid rounded"></a>
            </div>
          </div>
        </div>
      </div>

    </main>

    <?php include 'includes/footer.php'; ?>
  </div>

  <script src="js/vendor/jquery-3.3.1.min.js"></script>
  <script src="js/vendor/popper.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/vendor/owl.carousel.min.js"></script>
  <script src="js/vendor/jarallax.min.js"></script>
  <script src="js/vendor/jarallax-element.min.js"></script>
  <script src="js/vendor/ofi.min.js"></script>
  <script src="js/vendor/aos.js"></script>
  <script src="js/vendor/jquery.lettering.js"></script>
  <script src="js/vendor/jquery.sticky.js"></script>
  <script src="js/vendor/jquery.fancybox.min.js"></script>
  <script src="js/vendor/TweenMax.min.js"></script>
  <script src="js/vendor/ScrollMagic.min.js"></script>
  <script src="js/vendor/scrollmagic.animation.gsap.min.js"></script>
  <script src="js/vendor/debug.addIndicators.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
