<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set your Gmail address to receive the emails
    $to = "amjadmm127@gmail.com";

    // Subject of the email
    $subject = "New message from MADAD Students Union";

    // Compose the email body
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Set additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        // If the email is sent successfully, redirect back to the contact page with a success message
        header("Location: contact.html?status=success");
        exit();
    } else {
        // If there's an error sending the email, redirect back to the contact page with an error message
        header("Location: contact.html?status=error");
        exit();
    }
} else {
    // If the request method is not POST, redirect back to the contact page
    header("Location: contact.html");
    exit();
}
?>
