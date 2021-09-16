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
    <h1>Sign Up</h1>
    <form action="registrationprocess.php" method="post">
    <div>
        <label for="username">User Name :</label>
        <input type="text" name="username" id="username" required>
    </div>
    <div>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required >
    </div>
    <div>
        <label for="firstname">First Name :</label>
        <input type="text" name="firstname" id="firstname" required> 
    </div>
    <div>
        <label for="lastname">Last Name :</label>
        <input type="text" name="lastname" id="lastname" required>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="institution">Institution :</label>
        <input type="text" name="institution" id="institution" required>
    </div>
    
    <input type="submit" name="signup">
    </form>
    <a href="index.php">Already have an account?</a>
</body>
</html>