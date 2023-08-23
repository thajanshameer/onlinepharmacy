<?php
// Connect to database
$host = "localhost";
$dbusername = "root";
$dbPassword = "";
$dbname = "form";

$conn = new mysqli($host, $dbusername, $dbPassword, $dbname);
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert statmemt
    $stmt = $conn->prepare("SELECT * FROM regis WHERE email = ? AND conform = ?");
    $stmt->bind_param("ss", $email, $password);//pass the variable
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result !== false && $result->num_rows === 1) {
        header("Location: http://localhost/pro1/home1.php");
        exit();
    } else {
        echo "Invalid email and password";
    }
}
//close connection
$conn->close();
?>
