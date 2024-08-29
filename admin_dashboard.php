<?php
session_start();

// Check if the user is logged in as an admin
if (!isset($_SESSION['admin_user'])) {
    // If not, redirect to the admin login page
    header("Location: admin_login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to the Admin Dashboard, <?php echo $_SESSION['admin_user']; ?>!</h1>
    <p>This is a secure area accessible only by admins.</p>
    
    <button><a href="index.php">Log out</a></button>
</body>
</html>
