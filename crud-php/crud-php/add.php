<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,600,0,0" />
    <title>Add User</title>
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
 
<body>
   
            
    
    </div>
    <form class="login-card-form" action="add.php" method="post" name="form1" enctype="multipart/form-data">
        <div class="form-item">
                    <h1>Add User</h1>
                    
                    <input name="username" type="text" placeholder="Enter Username" id="user" autofocus required>
                </div>
                <div class="form-item">
                    
                    <input name="password" type="password" placeholder="Enter Password" id="password" required>
                </div>
                <div>
                    <input type="file" name="image" accept="image/*" />
                </div>
                <div class="form-item-other">
                </div>
                <div class="button">
                    <button type="submit" name="submit">Add User</button>
                    <br>
                    <div>
                        <a href="index.php">Go Back?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $user = $_POST['username'];
        $password = $_POST['password'];
        $img = $_FILES['image']['name'];

        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(user,password,img) VALUES('$user','$password','$img')");
        
        // Show message when user added
        echo "<a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>

<!-- <a href='index.php'>View Users</a>"; -->