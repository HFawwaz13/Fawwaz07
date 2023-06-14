<?php
// Create database connection using config file
include_once("config.php");


 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
    
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href=""/>
</head>
 
<body>
   
<div class="table">
<h1>Daftar User</h1>
    <a class="adduser" href="add.php">Add New User</a><br/><br/>
    
    <table class="table" width='80%' border=1>
        
        <tr>
            <th>Name</th> <th>image</th><th>Update</th>
        </tr>
    </div>




            <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['user']."</td>";
        // echo "<td>".$user_data['password']."</td>";
        echo "<td>".$user_data['img']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
</div>
</body>
</html>