<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Add your own email address where you want to receive the messages
$to = 'faison.eugene@student.greenriver.edu';

// Set email subject
$subject = 'New Contact Form Submission';

// Build the email message
$body = "Name: $name\n";
$body .= "Email: $email\n\n";
$body .= "Message:\n$message";

// Set headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
$mailSuccess = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSuccess) {
    echo 'Message sent successfully!';
} else {
    echo 'Error sending message. Please try again later.';
}
?>
