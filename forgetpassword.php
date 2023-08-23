<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'form';

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted form data
    $email = $_POST['email'];
    $newPassword = $_POST['newpassword'];
    $conformPassword = $_POST['conformpassword'];

    if (strlen($newPassword) >= 6) {
        if ($newPassword === $conformPassword) {
        

            // Update the password and conform fields in the database
            $sql = "UPDATE regis SET pass = '$newPassword', conform = '$conformPassword' WHERE email = '$email'";
            $result = $conn->query($sql);

            if ($result !== false && $conn->affected_rows === 1) {
                // Password and conform updated successfully
                echo "Your password has been reset.";
            } elseif ($result === false) {
                echo "Database Error: " . $conn->error;
            } else {
                echo "Failed to update password.";
            }
        } else {
            echo "Passwords do not match.";
        }
    } else {
        echo "Password must be at least 6 characters.";
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
?>
