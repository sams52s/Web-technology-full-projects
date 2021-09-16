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

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = mysqli_connect('localhost','root','','studybuddy');
    $sql = "SELECT * FROM users WHERE username ='$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        if($_POST["username"]=="Admin" && $_POST["password"]=="Admin"){
            session_start();
            $_SESSION["username"] = $username;
            echo "Redirecting";
            header("refresh: 0.5; url = admin.php");
            exit();
        }
        else{
            session_start();
            $_SESSION["username"] = $username;
            echo "Redirecting";
            header("refresh: 0.5; url = user.php");
            exit();
        }
    }
    else{
        echo "User not found!";
        header("refresh: 0.5; url = index.php");
    }
}

?>