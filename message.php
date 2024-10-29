<?php
// Get form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

// Email settings
$to = 'debendevanzelem@gmail.com'; // Replace with your email address
$subject = "$subject\r\n";
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$fullMessage = "Name: $fname\n $lname\nEmail: $email\n\nMessage:\n$message";

// Send the email
if (mail($to, $subject, $fullMessage, $headers)) {
    echo "Thank you, $fname! Your message has been sent successfully.";
} else {
    echo "Oops! Something went wrong, and we couldn't send your message.";
} else {
    echo 'Invalid request.';
}
?>
