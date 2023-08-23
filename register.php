<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $conform = $_POST['conform'];

    // Perform form validation
    $errors = array();

    if (empty($username)) {
        $errors[] = "Please enter your name";
    }

    if (empty($phone)) {
        $errors[] = "Please enter your phone number";
    }

    if (empty($email)) {
        $errors[] = "Please enter your email";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email";
    }

    if (empty($password)) {
        $errors[] = "Please enter a password";
    }

    if ($password !== $conform) {
        $errors[] = "Passwords do not match";
    }

    // If there are no errors, insert data into the database
    if (empty($errors)) {
        // Create a database connection
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "form";

        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO regis (username, phone, email, pass, conform) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die('Prepare Error: ' . $conn->error);
        }

        // Bind the parameters to the prepared statement
        $stmt->bind_param("sssss", $username, $phone, $email, $password, $conform);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // Redirect the user to nxt page
            echo "registation scuessful";
            header("LOCATION:signin.html");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
        $conn->close();
    }
}
?>
