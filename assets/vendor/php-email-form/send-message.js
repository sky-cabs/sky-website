// Get the email address and message from the form
var email = document.getElementById('email').value;
var message = document.getElementById('message').value;

// Create a new XMLHttpRequest object
var xhr = new XMLHttpRequest();

// Set the request method and URL
xhr.open('POST', 'send-message.php');

// Set the request headers
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

// Set the request body
xhr.send('email=' + email + '&message=' + message);

// Listen for the response
xhr.onload = function() {
  if (xhr.status === 200) {
    // The message was sent successfully
    alert('Your message was sent successfully!');
  } else {
    // There was an error sending the message
    alert('There was an error sending your message. Please try again later.');
  }
};
