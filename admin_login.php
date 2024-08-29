<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="adminform.css"> 
</head>
<body>
    <div class="login-form">
        <h2>Admin Login</h2>
        <form action="admin_login.php" method="POST">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login" id="btn">Login</button>
        </form>
    </div>
</body>
</html>

<?php
session_start();

if (isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password match 'admin'
    if ($username === 'admin' && $password === 'admin') {
        // Set session variable to track admin login
        $_SESSION['admin_user'] = $username;
        // login to admin dashboard
        header("Location: admin_dashboard.php");
        exit();
    } else {
        // when invalid show wrror message.
        echo '<script>
                alert("Invalid username or password.");
                window.location.href = "admin_login.php";
              </script>';
    }
}
?>
