<?php
if(isset($_POST["signup"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $institution = $_POST["institution"];

    $conn = mysqli_connect('localhost','root','','studybuddy');

    $sql = "SELECT * FROM users WHERE username ='$username'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    $sql = "SELECT * FROM users WHERE email ='$email'";
    $result = mysqli_query($conn,$sql);
    $count1 = mysqli_num_rows($result);

    if($count == 1 || $count1 == 1){
        echo "Username or Email is already registered!";
        echo "Try again!";
        header("refresh: 3; url = signup.php");
    }
    else{
        $conn = mysqli_connect('localhost','root','','studybuddy');
        $sql = "INSERT INTO users(username,password,firstname,lastname,email,institution) VALUES('$username','$password','$firstname','$lastname','$email','$institution')";
        if(mysqli_query($conn,$sql)){
            echo"Registration Success";
            header("refresh: 2; url = login.php");
        }
    }
}
else{
    if(session_status() == PHP_SESSION_NONE){

    }
    header("location:index.php");
}

?>