<?php

// Include the PHPMailer library
require 'vendor/autoload.php';

// Get the contact form data from the request body
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Validate the contact form data
if (empty($name) || empty($email) || empty($phone) || empty($message)) {
  echo 'All fields are required.';
  exit;
}

// Create a new PHPMailer object
$mail = new PHPMailer();

// Set the sender email address
$mail->setFrom('sender@email.com');

// Set the recipient email address
$mail->addAddress('recipient@email.com');

// Set the email subject
$mail->Subject = 'Taxi Booking Contact Form';

// Set the email body
$mail->Body = "
Name: $name
Email: $email
Phone: $phone
Message: $message
";

// Send the email
if (!$mail->send()) {
  echo 'Error sending email.';
  exit;
}

// Success message
echo 'Email sent successfully!';

?>
