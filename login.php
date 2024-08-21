<?php
session_start();
include("connection.php");

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    // Query the database to find the user by email
    $sql = "SELECT * FROM sign_up WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password']; // Assuming 'password' is the column name in the database

        // Verify the password entered by the user with the hashed password in the database
        
        if (password_verify($password, $hashed_password)) {
            // Password is correct, start session and redirect to welcome page

            $_SESSION['user'] = $row['username']; // Store username in session
            header("Location: welcome.php");
            exit();
        } else {
            // Invalid password
            echo '<script>
                window.location.href= "logins.php";
                alert("Invalid password.");
            </script>';
        }
    } else {
        // Email not found in the database
        echo '<script>
            window.location.href= "logins.php";
            alert("Email not registered.");
        </script>';
    }
}

mysqli_close($conn);
?>
