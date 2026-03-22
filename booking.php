<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Trend's Place">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="Book your stay at Trend's Place Hotel & Suites Yenagoa, Bayelsa." />
  <meta name="keywords" content="hotel booking, Yenagoa hotel, Bayelsa hotel, Trend's Place" />

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
                  <p class="text-white">Experience the perfect blend of luxury and comfort in Yenagoa, Bayelsa.</p>
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

                <?php if (isset($_GET['status']) && isset($_GET['message'])): ?>
                <div class="alert alert-<?php echo $_GET['status'] === 'success' ? 'success' : 'danger'; ?> mb-4" role="alert">
                  <?php echo htmlspecialchars($_GET['message']); ?>
                </div>
                <?php endif; ?>

                <form action="process_booking.php" method="POST" id="bookingForm">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="fname">First Name *</label>
                      <input type="text" id="fname" name="fname" class="form-control" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="lname">Last Name *</label>
                      <input type="text" id="lname" name="lname" class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="email">Email Address *</label>
                      <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="phone">Phone Number *</label>
                      <input type="text" id="phone" name="phone" class="form-control" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="checkin">Check-in Date *</label>
                      <input type="date" id="checkin" name="checkin" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="checkout">Check-out Date *</label>
                      <input type="date" id="checkout" name="checkout" class="form-control" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="room_type">Room Type *</label>
                      <select name="room_type" id="room_type" class="form-control" required>
                    

                           <option value="">Select a room type</option>
                            <option value="Studio Suite" data-price="75000">Studio Suite - ₦75,000/night</option>
                            <option value="Standard Room" data-price="80000">Standard Room - ₦80,000/night</option>
                            <option value="Executive Suite" data-price="85000">Executive Suite - ₦85,000/night</option>
                            <option value="Business Royale" data-price="90000">Business Royale - ₦90,000/night</option>
                            <option value="Ambassadorial Suite" data-price="100000">Ambassadorial Suite - ₦100,000/night</option>
                            <option value="Grand Royale Suite" data-price="110000">Grand Royale Suite - ₦110,000/night</option>
                            
                      </select>
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="numRooms">No. of Rooms </label>
                        <input type="number" id="numRooms" class="form-control" name="nofroom" min="1" max="10" value="1" required>
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
                <img src="images/Ambassadorial Suite 2.jpg" alt="Grand Royale Suite Preview" class="img-fluid mr-4" style="max-width: 150px;">
                <div>
                  <h3 class="h5">Grand Royale Suite</h3>
                  <p>Elegant and spacious starting from ₦110,000.</p>
                </div>
              </div>

              <div class="quick-contact-item d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="200">
                <img src="images/Amabassadorial Sitting Room 2.jpg" alt="Ambassadorial Suite Preview" class="img-fluid mr-4" style="max-width: 150px;">
                <div>
                  <h3 class="h5">Ambassadorial Suite</h3>
                  <p>Our prestigious suite starting from ₦100,000.</p>
                </div>
              </div>

              <div class="quick-contact-item d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="300">
                <img src="images/Business Royal 1.jpg" alt="Business Royale Preview" class="img-fluid mr-4" style="max-width: 150px;">
                <div>
                  <h3 class="h5">Business Royale</h3>
                  <p>Perfect for corporate stays starting from ₦90,000.</p>
                </div>
              </div>

              <div class="quick-contact-item d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="400">
                <img src="images/Executive Suite.jpg" alt="Executive Suite Preview" class="img-fluid mr-4" style="max-width: 150px;">
                <div>
                  <h3 class="h5">Executive Suite</h3>
                  <p>Comfort and style for executives starting from ₦85,000.</p>
                </div>
              </div>

              <div class="quick-contact-item d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="500">
                <img src="images/Standard Room 2.jpg" alt="Standard Room Preview" class="img-fluid mr-4" style="max-width: 150px;">
                <div>
                  <h3 class="h5">Standard Room</h3>
                  <p>Excellent value and comfort starting from ₦80,000.</p>
                </div>
              </div>

              <div class="quick-contact-item d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="600">
                <img src="images/Studio Suite 3.jpg" alt="Studio Suite Preview" class="img-fluid mr-4" style="max-width: 150px;">
                <div>
                  <h3 class="h5">Studio Suite</h3>
                  <p>Cozy and functional space starting from ₦75,000.</p>
                </div>
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

      <!-- Confirmation Modal -->
      <div class="modal fade" id="confirmBookingModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header bg-dark text-white">
              <h5 class="modal-title" id="confirmModalLabel">Confirm Your Reservation Details</h5>
              <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="modalBookingDetails" style="position: relative; z-index: 1;">
              <!-- Details will be populated by JS -->
            </div>
            <style>
              #modalBookingDetails::before {
                content: "";
                background-image: url('images/logotp.png');
                background-repeat: no-repeat;
                background-position: center;
                background-size: 250px;
                opacity: 0.08;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                position: absolute;
                z-index: -1;
              }
            </style>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit Details</button>
              <button type="button" id="finalConfirmBtn" class="btn btn-primary">Confirm & Book Now</button>
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
  <script>
    $(document).ready(function() {
      $('#bookingForm').on('submit', function(e) {
        e.preventDefault();
        
        // Get field values
        var fname = $('#fname').val();
        var lname = $('#lname').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var checkin = $('#checkin').val();
        var checkout = $('#checkout').val();
        var roomType = $('#room_type').val();
        var roomPrice = $('#room_type option:selected').data('price');
        var numRooms = $('#numRooms').val();
        var adults = $('#adults').val();
        var message = $('#message').val();

        // Calculate Days
        var date1 = new Date(checkin);
        var date2 = new Date(checkout);
        var timeDiff = Math.abs(date2.getTime() - date1.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
        if (diffDays <= 0) diffDays = 1;

        // Calculate Totals
        var totalPrice = roomPrice * diffDays * numRooms;
        var formattedPrice = roomPrice ? '₦' + roomPrice.toLocaleString() : 'N/A';
        var formattedTotal = roomPrice ? '₦' + totalPrice.toLocaleString() : 'N/A';

        // Build summary HTML
        var summaryHtml = `
          <div class="row">
            <div class="col-md-5 border-right">
              <h6 class="text-uppercase text-muted font-weight-bold" style="font-size: 11px; letter-spacing: 1px;">Guest Information</h6>
              <p class="mb-1" style="font-size: 14px;"><strong>Name:</strong> ${fname} ${lname}</p>
              <p class="mb-1" style="font-size: 14px;"><strong>Email:</strong> ${email}</p>
              <p class="mb-1" style="font-size: 14px;"><strong>Phone:</strong> ${phone}</p>
            </div>
            <div class="col-md-7">
              <h6 class="text-uppercase text-muted font-weight-bold" style="font-size: 11px; letter-spacing: 1px;">Stay Details</h6>
              <p class="mb-1" style="font-size: 14px;"><strong>Room Type:</strong> ${roomType}</p>
              <p class="mb-1" style="font-size: 14px;"><strong>Dates:</strong> ${checkin} to ${checkout} (<strong>${diffDays} Night${diffDays > 1 ? 's' : ''}</strong>)</p>
              <p class="mb-1" style="font-size: 14px;"><strong>Guests:</strong> ${adults} Adult(s) | <strong>Rooms:</strong> ${numRooms}</p>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-12">
               <div class="bg-light p-3 border rounded shadow-sm">
                  <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Daily Rate:</span>
                    <span class="font-weight-bold">${formattedPrice}</span>
                  </div>
                  <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Duration:</span>
                    <span>${diffDays} Night${diffDays > 1 ? 's' : ''}</span>
                  </div>
                  <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">No. of Rooms:</span>
                    <span>${numRooms} Room(s)</span>
                  </div>
                  <hr class="my-2">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 font-weight-bold">Total Amount:</h5>
                    <h4 class="mb-0 text-primary font-weight-bold" style="color: #d4af37 !important;">${formattedTotal}</h4>
                  </div>
               </div>
            </div>
          </div>
          <hr>
          <h6 class="text-uppercase text-muted font-weight-bold" style="font-size: 11px; letter-spacing: 1px;">Special Requests</h6>
          <p class="mb-0" style="font-size: 14px;">${message || 'None'}</p>
          <div class="alert alert-warning mt-4 py-2 border-0" style="background-color: #fff3cd; border-left: 4px solid #ffc107 !important;">
            <small class="font-weight-bold"><i class="icon-info-circle mr-2"></i>Note: Your booking will be officially confirmed after our front desk contacts you for verification and payment.</small>
          </div>
        `;

        // Show modal
        $('#modalBookingDetails').html(summaryHtml);
        $('#confirmBookingModal').modal('show');
      });

      // Handle final confirmation
      $('#finalConfirmBtn').on('click', function() {
        $('#bookingForm')[0].submit();
      });
    });
  </script>
</body>

</html>
