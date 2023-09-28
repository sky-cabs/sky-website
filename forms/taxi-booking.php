<?php

// Include the PHPMailer library
require 'vendor/autoload.php';

// Get the form data from the request body
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pickup_location = $_POST['pickup_location'];
$dropoff_location = $_POST['dropoff_location'];
$pickup_date = $_POST['pickup_date'];
$pickup_time = $_POST['pickup_time'];
$passenger_count = $_POST['passenger_count'];

// Validate the form data
if (empty($name) || empty($email) || empty($phone) || empty($pickup_location) || empty($dropoff_location) || empty($pickup_date) || empty($pickup_time) || empty($passenger_count)) {
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
$mail->Subject = 'Taxi Booking Request';

// Set the email body
$mail->Body = "
Name: $name
Email: $email
Phone: $phone
Pickup Location: $pickup_location
Dropoff Location: $dropoff_location
Pickup Date: $pickup_date
Pickup Time: $pickup_time
Passenger Count: $passenger_count
";

// Send the email
if (!$mail->send()) {
  echo 'Error sending email.';
  exit;
}

// Success message
echo 'Taxi booking request sent successfully!';

?>
