<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Set the recipient email address
  $to = 'bereketmuniye4@gmail.com';

  // Set the email headers
  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  // Compose the email body
  $email_body = "Name: $name\n\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";

  // Send the email
  if (mail($to, $subject, $email_body, $headers)) {
    echo "Email sent successfully.";
  } else {
    echo "Unable to send email.";
  }
}
?>