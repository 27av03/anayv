<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Destination email
    $to = "varm9594@mylaurier.com"; 
    $subject = "New message from $name via website contact form";
    $body = "You have received a new message from $name.\n\n".
            "Email: $email\n\n".
            "Message:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
}
?>
