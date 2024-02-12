<?php
// Define the expected password
$expectedPassword = "chenling";

// Check if a password has been submitted
if (isset($_POST['password'])) {
    $password = $_POST['password'];

    // Check if the submitted password matches the expected password
    if ($password == $expectedPassword) {
        // Password is correct, redirect to the protected page
        header("Location: picturesecret.html");
        exit;
    } else {
        // Password is incorrect, display an error message
        echo "Incorrect password. Please try again.";
    }
}
?>
