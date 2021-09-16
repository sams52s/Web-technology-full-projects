<?php
if(session_status()>=0){
    if(isset($_SESSION["username"])){
        if($_SESSION["username"]=="Admin"){
            echo "Redirecting";
            header("refresh: 0.5; url = admin.php");
        }
        else{
            echo "Redirecting";
            header("refresh: 0.5; url = user.php");
        }
        
    }
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
    <h1>Login</h1>
    <form action="loginprocess.php" method="post">
    
    <div>
        <label for="username">User Name :</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Password :</label>
        <input type="text" name="password" id="password" required>
    </div>
    
    <input type="submit" name="submit">
    </form>
    <a href="signup.php">Not registered yet?</a>
</body>
</html>