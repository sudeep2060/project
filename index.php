<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="form-box">
        <form class="form" action="signup.php" method="POST">
            <span class="title">Sign up</span>
            <span class="subtitle">Create a free account with your email.</span>
            <div class="form-container">
              <input type="text" class="input" placeholder="username" name="user">
                    <input type="email" class="input" placeholder="Email" name="email">
                    <input type="password" class="input" placeholder="Password" name="pass">
                    <input type="password" class="input" name="cpass" placeholder="Retype Password" required></br></br>
                    <input type="submit" id="btn" value="signup" name="submit">
            </div>
        </form>
        <div class="form-section">
          <p>Have an account? <a href="logins.php">Log in</a> </p>
        </div>
        </div> 
</body>
</html>

