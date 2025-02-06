<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the form
    $user_email = $_POST['email'];

    // Your email address
    $to = "pooplingworldof1925@gmail.com";
    
    // Email subject
    $subject = "New Promotion Signup";
    
    // Email body content
    $message = "You have a new signup for the promotion!\n\n";
    $message .= "User email: " . $user_email;
    
    // Headers for the email
    $headers = "From: no-reply@yourwebsite.com";

    // Send email
    if(mail($to, $subject, $message, $headers)) {
        echo "Thank you for signing up!";
    } else {
        echo "There was an error sending your email.";
    }
}
?>
