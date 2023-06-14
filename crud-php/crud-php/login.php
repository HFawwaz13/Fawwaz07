<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("config.php");

session_start();

if (isset($_SESSION['userlll'])) {
    header("Location: index.php");
   
}

if (isset($_POST['submit'])) {
    $user = $_POST['user'];
    $password = ($_POST['password']);

    // Database connection code here
    
    $sql = "SELECT * FROM users WHERE user='$user' AND password='$password'";
    $result = mysqli_query($mysqli, $sql);
    
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
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post">
            <h2>Login</h2>
           
            <div>
                <input type="text" name="user" placeholder="Username" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div>
                <button type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>







