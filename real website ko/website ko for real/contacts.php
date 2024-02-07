<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Here you can add code to send the email or save the message to a database
    
    // Redirect back to the contact page with a status parameter
    header("Location: contacts.html?status=submitted");
    exit;
}
?>
