<?php
// SMTP Configuration for JenniferLami Visuals
function setupSMTP($mail)
{
    $mail->isSMTP();
    $mail->Host = 'mail.jenniferlamivisuals.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@jenniferlamivisuals.com';
    $mail->Password = 'Boys2men@2020';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Default From Address
    $mail->setFrom('info@jenniferlamivisuals.com', 'JenniferLami Visuals');
}
?>