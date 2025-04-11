<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set the recipient email address (your email)
    $to = "maitreyatayade@gmail.com"; // Change to your actual email address

    // Set the email subject
    $email_subject = "New Contact Form Submission: $subject";

    // Set the email body
    $email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send the email
    if(mail($to, $email_subject, $email_body)) {
        echo "Thank you for contacting us!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
