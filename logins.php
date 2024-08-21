<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login .css">
</head>
<body>
    <div class="form-box">
        <form class="form" action="login.php" method="POST">
            <span class="title">Login</span>
            <span class="subtitle">Enter your credentials to access your account.</span>
            <div class="form-container">
                <input type="email" class="input" placeholder="Email" name="email" required><br>
                <input type="password" class="input" placeholder="Password" name="pass" required>
                <input type="submit" id="btn" value="Login" name="login">
            </div>
        </form>
        <div class="form-section">
            <p>Don't have an account? <a href="index.php">Sign up</a></p>
        </div>
    </div> 
</body>
</html>