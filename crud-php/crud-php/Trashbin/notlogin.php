<?php
// Create database connection using config file
include_once("config.php");

error_reporting(0);
 
session_start();
 
if (isset($_SESSION['user'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE user='$user' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['user'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>
 



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <div class="login-card-container">
        <div class="login-card">
            <div class="login-card-logo">
                <img src="img/logo.png" alt="logo">
            </div>
            <div class="login-card-header">
                <h1>Sign In</h1>
                <div>Please login to use the platform</div>
            </div>
            <form method="post" class="login-card-form">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">person</span>
                    <input name="username" type="text" placeholder="Enter Username" id="userform" 
                    autofocus required>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-rounded">lock</span>
                    <input name="password" type="password" placeholder="Enter Password" id="passwordform"
                     required>
                </div>
                <div class="form-item-other">

                </div>
                <button type="submit">Sign In</button>
            </form>
     
</body>

</html>