$(document).ready(function() {

    // Submit the contact form using AJAX
    $('#contact-form').submit(function(event) {
      event.preventDefault();
  
      // Get the contact form data
      var name = $('#name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var message = $('#message').val();
  
      // Make an AJAX request to the PHP script
      $.ajax({
        url: '/contact.php',
        method: 'POST',
        data: {
          name: name,
          email: email,
          phone: phone,
          message: message
        },
        success: function(response) {
          // Display the success message
          alert('Email sent successfully!');
        },
        error: function(error) {
          // Display the error message
          alert('Error sending email.');
        }
      });
    });
  
  });
  