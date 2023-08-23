<?php
// Start or resume the session
session_start();



    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other desired location
    header("Location: http://localhost/project/signin.html"); // Replace with your login page URL
    exit;

?>
