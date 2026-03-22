<!-- /*
* Template Name: LuxuryHotel
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500i,700|Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/vendor/icomoon/style.css">
    <link rel="stylesheet" href="css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="css/vendor/aos.css">
    <link rel="stylesheet" href="css/vendor/animate.min.css">
    <link rel="stylesheet" href="css/vendor/bootstrap.css">
    <link rel="stylesheet" href="css/vendor/jquery.fancybox.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Contact Us | Trend's Place Hotel & Suites</title>
  </head>
  <body>
    
    <div id="untree_co--overlayer"></div>
    <div class="loader">
      <div class="loader-logo"><img src="images/logotp.png" alt="Trend's Place Logo"></div>
    </div>

    
    <?php $headerClass = 'dark'; include 'includes/header.php'; ?>

    <div class="untree_co--site-wrap">

      <main class="untree_co--site-main">
        

        <div class="untree_co--site-hero inner-page bg-light" style="background-image: url('images/Walk Way Ground Fllor.jpg'); background-size: cover; background-position: center;">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-9">
                <div class="site-hero-contents" data-aos="fade-up">
                  <h1 class="hero-heading">Contact Us</h1>
                  <div class="sub-text w-75">
                    <!-- <p>We are here to assist you. Reach out to us for bookings, inquiries, or special requests.</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="untree_co--site-section">
          <div class="container">
            
              <div class="row">
                <div class="col-12" data-aos="fade-up">
                  <h2 class="display-4 mb-5">Fill the form</h2>
                </div>
                <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                  
                  <form action="process_contact.php" method="POST">
                    <?php if (isset($_GET['message'])): ?>
                    <div class="alert alert-success mb-4" role="alert">
                      <?php echo htmlspecialchars($_GET['message']); ?>
                    </div>
                    <?php endif; ?>
                    <?php if (isset($_GET['error'])): ?>
                    <div class="alert alert-danger mb-4" role="alert">
                      <?php echo htmlspecialchars($_GET['error']); ?>
                    </div>
                    <?php endif; ?>

                    <div class="form-group">
                      <label for="name">Your Name *</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Your Email *</label>
                      <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                      <label for="phone">Phone Number</label>
                      <input type="text" name="phone" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject *</label>
                      <select name="subject" id="subject" class="form-control" required>
                        <option value="general">General Inquiry</option>
                        <option value="reservation">Room Reservation</option>
                        <option value="event">Event Inquiry</option>
                        <option value="feedback">Feedback</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="message">Message *</label>
                      <textarea name="message" class="form-control" id="message" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Send Message" class="btn btn-black px-5 text-white">
                    </div>
                  </form>
                </div>
                <div class="col-md-4 ml-auto"  data-aos="fade-up" data-aos-delay="200">
                  <div class="media-29190">
                    <span class="label">Email</span>
                    <p><a href="mailto:info.Bayelsa@trendsplacehotelandsuites.com">info.Bayelsa@trendsplacehotelandsuites.com</a></p>
                  </div>
                  <div class="media-29190">
                    <span class="label">Phone</span>
                    <p><a href="tel:+2347017834528">+234 701 783 4528</a></p>
                  </div>
                  <div class="media-29190">
                    <span class="label">Address</span>
                    <p>10 Prosco road, Yenagoa, Bayelsa</p>
                  </div>
                  <div class="media-29190">
                    <span class="label">Social</span>
                    <ul class="icons-top icons-dark">
                      <!-- <li>
                        <a href="#"><span class="icon-facebook"></span></a>
                      </li> -->
                      <li>
                        <a href="https://www.tiktok.com/@trends.place.bayelsa"><span class="icon-play"></span></a>
                      </li>
                      <li>
                        <a href="https://www.instagram.com/trendsplacebayelsa"><span class="icon-instagram"></span></a>
                      </li>
                      <!-- <li>
                        <a href="#"><span class="icon-tripadvisor"></span></a>
                      </li> -->
                    </ul>
                  </div>
                </div>

              </div>
            
          </div>
        </div>

        <!-- <div class="untree_co--site-section py-5 bg-body-darker cta">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h3 class="m-0 p-0">If you have any special requests, please feel free to call us. <a href="tel:+2347017834528">+234 701 783 4528</a></h3>
              </div>
            </div>
          </div>
        </div> -->

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
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166033648-1"></script><script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag("js", new Date()); gtag("config", "UA-166033648-1");</script></body>
</html>