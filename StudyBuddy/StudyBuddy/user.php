<?php
$token = "";
$token1="";
session_start();
if(isset($_SESSION["username"])){
    echo "Welcome to User Profile";
    echo " ";
    $token= "signout.php";
    $token1="Sign Out";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a href=<?php echo $token; ?>><?php echo $token1; ?></a> <br>
    <a href="admin.php">Admin</a>
</body>
</html>