$(document).ready(function() {

    // Submit the taxi booking form using AJAX
    $('#taxi-booking-form').submit(function(event) {
      event.preventDefault();
  
      // Get the form data
      var name = $('#name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var pickup_location = $('#pickup_location').val();
      var dropoff_location = $('#dropoff_location').val();
      var pickup_date = $('#pickup_date').val();
      var pickup_time = $('#pickup_time').val();
      var passenger_count = $('#passenger_count').val();
  
      // Make an AJAX request to the PHP script
      $.ajax({
        url: '/forms/taxi-booking.php',
        method: 'POST',
        data: {
          name: name,
          email: email,
          phone: phone,
          pickup_location: pickup_location,
          dropoff_location: dropoff_location,
          pickup_date: pickup_date,
          pickup_time: pickup_time,
          passenger_count: passenger_count
        },
        success: function(response) {
          // Display a success message
          alert('Taxi booking request sent successfully!');
        },
        error: function(error) {
          // Display an error message
          alert('Error sending taxi booking request.');
        }
      });
    });
  
  });
  