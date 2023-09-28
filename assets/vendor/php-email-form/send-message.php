<?php

// Get the email address and message from the POST request
$email = $_POST['email'];
$message = $_POST['message'];

// Send the email
mail($email, 'Message from your website', $message);

// Return a success response
echo 'Success!';

?>
