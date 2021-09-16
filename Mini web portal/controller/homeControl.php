<?php  
    if(isset($_SESSION["id"])){  
        $id= $_SESSION["id"] ;   
        $usertype=$_SESSION["usertype"] ;
        include '../model/userModel.php'; 
        $name=homemodel($id)  ;   
        echo "<h1>Welcome ". $name."! <br></h1>";//"using session from registration.php
    }
    else{
        echo "Login please";
    }
?>