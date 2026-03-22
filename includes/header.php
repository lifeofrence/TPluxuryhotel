<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="untree_co--site-mobile-menu" aria-label="Mobile Menu">
  <div class="close-wrap d-flex">
    <a href="#" class="d-flex ml-auto js-menu-toggle">
      <span class="close-label">Close</span>
      <div class="close-times">
        <span class="bar1"></span>
        <span class="bar2"></span>
      </div>
    </a>
  </div>
  <div class="site-mobile-inner"></div>
</nav>

<nav class="untree_co--site-nav js-sticky-nav <?php echo isset($headerClass) ? $headerClass : ''; ?>" aria-label="Site Navigation">
  <div class="container d-flex align-items-center">
    <a href="index.php" class="untree_co--site-logo navbar-logo">
      <img src="images/logo.png" alt="Trend's Place Logo">
    </a>
    <div class="site-nav-ul-wrap text-center d-none d-lg-block">
      <ul class="site-nav-ul js-clone-nav">
        <li class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
        <li class="has-children <?php echo $current_page == 'rooms.php' ? 'active' : ''; ?>">
          <a href="rooms.php">Rooms</a>
          <ul class="dropdown">
            <li class="has-children">
              <a href="rooms.php">Suites</a>
              <ul class="dropdown">
                <li><a href="rooms.php">Ambassadorial Suite</a></li>
                <li><a href="rooms.php">Queens Royal</a></li>
                <li><a href="rooms.php">Business Royal</a></li>
              </ul>
            </li>
            <li><a href="rooms.php">Executive Deluxe</a></li>
            <li><a href="rooms.php">Standard Rooms</a></li>
          </ul>
        </li>
        <li class="<?php echo $current_page == 'amenities.php' ? 'active' : ''; ?>"><a href="amenities.php">Amenities</a></li>
        <li class="<?php echo $current_page == 'gallery.php' ? 'active' : ''; ?>"><a href="gallery.php">Gallery</a></li>
        <li class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>"><a href="about.php">About Us</a></li>
        <li class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>"><a href="contact.php">Contact</a></li>
        <li class="<?php echo $current_page == 'booking.php' ? 'active' : ''; ?>"><a href="booking.php">Book Now</a></li>
      </ul>
    </div>
    <div class="icons-wrap text-md-right">

      <ul class="icons-top d-none d-lg-block">
        <li class="mr-4">
          <a href="#" class="js-search-toggle" aria-label="Search"><span class="icon-search2"></span></a>
        </li>
        <li><a href="#" aria-label="Facebook"><span class="icon-facebook"></span></a></li>
        <li><a href="#" aria-label="Twitter"><span class="icon-twitter"></span></a></li>
        <li><a href="#" aria-label="Instagram"><span class="icon-instagram"></span></a></li>
      </ul>

      <!-- Mobile Toggle -->
      <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar" aria-label="Menu Toggle">
        <span></span>
      </a>
    </div>
  </div>
</nav>
