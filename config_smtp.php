<?php
/**
 * SMTP Configuration Settings
 * Centralized settings for PHPMailer to avoid duplication across scripts.
 * 
 * NOTE: Replace these with your production SMTP server credentials
 * when the website is ready to go live.
 */

// SMTP Server Details (Current: Mailtrap for testing)
define('SMTP_HOST', 'smtp.mailtrap.io');
define('SMTP_AUTH', true);
define('SMTP_USER', 'c37ef4508c01e6'); 
define('SMTP_PASS', '25db67cf9f349e');
define('SMTP_SECURE', 'tls');
define('SMTP_PORT', 2525);

// Business Contact Defaults
define('CONTACT_EMAIL', 'info.Bayelsa@trendsplacehotelandsuites.com');
define('CONTACT_NAME', "Trend's Place Hotel & Suites");
define('WEBSITE_SENDER_EMAIL', 'website@trendsplacehotelandsuites.com');
define('ADMIN_RECIPIENT_EMAIL', 'info.Bayelsa@trendsplacehotelandsuites.com');
define('ADMIN_RECIPIENT_NAME', "Trend's Place Admin");

/**
 * Helper function to configure PHPMailer instance with these settings
 */
function configureSMTP($mail) {
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = SMTP_AUTH;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->SMTPSecure = SMTP_SECURE;
    $mail->Port       = SMTP_PORT;
    return $mail;
}
?>