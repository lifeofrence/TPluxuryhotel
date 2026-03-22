<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
session_start();

// Include PHPMailer - Adjust paths if necessary based on your project structure
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';
require_once 'config_smtp.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST') {
  try {
    // Extract booking data
    $fname = $_POST['fname'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $checkin = $_POST['checkin'] ?? '';
    $checkout = $_POST['checkout'] ?? '';
    $room_type = $_POST['room_type'] ?? '';
    $nofroom = $_POST['nofroom'] ?? '1';
    $adults = $_POST['adults'] ?? '1';
    $message = $_POST['message'] ?? '';

    $fullname = $fname . ' ' . $lname;

    // Validate required fields
    if (empty($fname) || empty($lname) || empty($email) || empty($phone) || empty($checkin) || empty($checkout) || empty($room_type)) {
      throw new Exception("Please fill in all required fields marked with *");
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new Exception("Invalid email address provided");
    }

    // Email status tracker
    $autoReplyEmailSent = false;

    // 1. Auto-reply to Guest
    $mailGuest = new PHPMailer(true);
    try {
      // Use central SMTP configuration
      configureSMTP($mailGuest);

      $mailGuest->setFrom(CONTACT_EMAIL, "Trend's Place Hotel & Suites");
      $mailGuest->addAddress($email, $fullname);
      $mailGuest->Subject = "Booking Confirmation Request - Trend's Place Hotel & Suites";
      $mailGuest->isHTML(true);

      $guestContent = "
      <html>
        <body style='margin:0;padding:0;background:#f5f7fa;font-family:Arial, sans-serif;'>
          <table role='presentation' width='100%' style='background:#f5f7fa; padding:20px;'>
            <tr>
              <td align='center'>
                <table width='600' style='background:#ffffff; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.1);'>
                  <tr>
                    <td style='background:#1a1a1a; color:#d4af37; padding:25px; border-radius:8px 8px 0 0;'>
                      <h2 style='margin:0;'>Trend's Place Hotel & Suites</h2>
                      <p style='margin:5px 0 0; color:#ffffff; opacity:0.8;'>Booking Request Received</p>
                    </td>
                  </tr>
                  <tr>
                    <td style='padding:30px; line-height:1.6; color:#333;'>
                      <p>Dear <strong>$fullname</strong>,</p>
                      <p>Thank you for choosing Trend's Place Hotel & Suites. We have received your booking request for a <strong>$room_type</strong>.</p>
                      
                      <div style='background:#f9f9f9; padding:20px; border-radius:5px; margin:20px 0;'>
                        <h4 style='margin-top:0; border-bottom:1px solid #ddd; padding-bottom:10px;'>Reservation Summary</h4>
                        <table width='100%'>
                          <tr><td><strong>Check-in:</strong></td><td>$checkin</td></tr>
                          <tr><td><strong>Check-out:</strong></td><td>$checkout</td></tr>
                          <tr><td><strong>Room Type:</strong></td><td>$room_type</td></tr>
                          <tr><td><strong>No. of Rooms:</strong></td><td>$nofroom</td></tr>
                          <tr><td><strong>Adults:</strong></td><td>$adults</td></tr>
                        </table>
                      </div>
                      
                      <p>Our front desk team will review your request and contact you shortly at <strong>$phone</strong> to finalize the booking and discuss payment options.</p>
                      <p>If you have any questions, please contact us at +234 701 783 4528 or reply to this email.</p>
                    </td>
                  </tr>
                  <tr>
                    <td style='background:#f1f1f1; padding:20px; text-align:center; font-size:12px; color:#666;'>
                      Trend's Place Hotel & Suites | 10 Prosco road, Yenagoa, Bayelsa<br>
                      Phone: +234 701 783 4528 | Email: <?php echo CONTACT_EMAIL; ?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </body>
      </html>";

      $mailGuest->Body = $guestContent;
      $mailGuest->send();
      $autoReplyEmailSent = true;
    } catch (Exception $e) {
      error_log("Guest Auto-reply error: " . $mailGuest->ErrorInfo);
    }

    // 2. Admin Notification
    $mailAdmin = new PHPMailer(true);
    try {
      // Use central SMTP configuration
      configureSMTP($mailAdmin);

      $mailAdmin->setFrom(WEBSITE_SENDER_EMAIL, "Website Booking");
      $mailAdmin->addAddress(ADMIN_RECIPIENT_EMAIL, ADMIN_RECIPIENT_NAME);
      $mailAdmin->Subject = "New Website Booking Request - $room_type from $fullname";
      $mailAdmin->isHTML(true);

      $adminContent = "
      <html>
        <body>
          <h2>New Booking Request Received</h2>
          <table border='1' cellpadding='10' style='border-collapse:collapse;'>
            <tr><td><strong>Guest Name:</strong></td><td>$fullname</td></tr>
            <tr><td><strong>Email:</strong></td><td>$email</td></tr>
            <tr><td><strong>Phone:</strong></td><td>$phone</td></tr>
            <tr><td><strong>Check-in:</strong></td><td>$checkin</td></tr>
            <tr><td><strong>Check-out:</strong></td><td>$checkout</td></tr>
            <tr><td><strong>Room Type:</strong></td><td>$room_type</td></tr>
            <tr><td><strong>No. of Rooms:</strong></td><td>$nofroom</td></tr>
            <tr><td><strong>Adults:</strong></td><td>$adults</td></tr>
            <tr><td><strong>Special Requests:</strong></td><td>$message</td></tr>
          </table>
        </body>
      </html>";

      $mailAdmin->Body = $adminContent;
      $mailAdmin->send();
      
      // Redirect with success
      header("Location: booking.php?status=success&message=" . urlencode("Booking request sent! We've sent a confirmation to $email"));
      exit;

    } catch (Exception $e) {
      error_log("Admin Notification error: " . $mailAdmin->ErrorInfo);
      // Still show success if auto-reply worked
      if ($autoReplyEmailSent) {
        header("Location: booking.php?status=success&message=" . urlencode("Booking request sent! We've sent a confirmation to $email"));
      } else {
        header("Location: booking.php?status=success&message=" . urlencode("Booking request received! Our team will contact you soon."));
      }
      exit;
    }

  } catch (Exception $e) {
    error_log("Booking Process Error: " . $e->getMessage());
    header("Location: booking.php?status=error&message=" . urlencode("Error: " . $e->getMessage()));
    exit;
  }
} else {
  header("Location: booking.php");
  exit;
}
