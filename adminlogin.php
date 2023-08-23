<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get values from the form
    $adminid = $_POST["adminid"];
    $password = $_POST["pass"];
    
    if (($adminid === "admin123" && $password === "password12") ||
        ($adminid === "shamir02" && $password === "123456")) {
        
        header("Location: http://localhost/project/home1.php");
        exit;
    } else {
// Invalid credentials, show an error message
if ($adminid === "admin123" || $adminid === "shamir02") {
    $errorMessage = "Incorrect password. Please try again.";
} else {
    $errorMessage = "Invalid credentials. Please try again.";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <form action="adminlogin.php" method="POST" id="adminLoginForm">
        <div class="container">
            <h1>Admin Login</h1>
            <?php if (isset($errorMessage)) { ?>
                <p style="color: red;"><?php echo $errorMessage; ?></p>
            <?php } ?>
            <div class="input-group">
                <label for="adminid"><b>Admin User ID</b></label><br>
                <input type="text" placeholder="Enter admin user ID" name="adminid" id="adminid" required>
            </div>
            
            <div class="input-group">
                <label for="pass"><b>Password</b></label><br>
                <input type="password" placeholder="Enter password" name="pass" id="pass" required>
            </div>
            <button type="submit" class="loginbtn">Login</button>
        </div>
    </form>
</body>
</html>


<style>
/* Reset some default styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #2e618b;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

.input-group input {
    width: 100%;
    padding: 10px;
    background-color: #f5f5f5;
    border: none;
    border-radius: 4px;
}

.loginbtn {
    display: block;
    width: 100%;
    padding: 10px;
    background-color:#2e618b;
    color: #ffffff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.loginbtn:hover {
    background-color:#2e618b;
}

.admin-dashboard {
    max-width: 800px;
    margin: 0 auto;
    padding: 40px;
    background-color: #5c7c90;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.admin-dashboard h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #2e8b57;
}

.admin-dashboard a {
    display: inline-block;
    margin-top: 10px;
    color: #2e8b57;
    text-decoration: none;
    transition: color 0.3s;
}

.admin-dashboard a:hover {
    color: #25573e;
}

</style>