<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['_replyto'];
    $message = $_POST['message'];
    
    // Validate data
    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "jyang4608@gmail.com";  // Replace with your email address
        $subject = "New contact form submission";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";
        
        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you for contacting me. I will get back to you soon.";
        } else {
            echo "There was an error sending your message. Please try again later.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request method.";
}
?>
