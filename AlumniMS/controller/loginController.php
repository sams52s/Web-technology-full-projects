<?php 
$flag=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if($_POST["id"]!=""){
        $id = test_input($_POST["id"]);
    }
    else{
        $flag=1;
        $iderr="id required";
    }
    if($_POST["password"]!=""){
        $password = test_input($_POST["password"]);
    }
    else{
        $flag=1;
        $passworderr="id required";
    }
    if($flag==1){
        header("Refresh: 2; url=../view/users/login.php");
        echo $iderr ."<br>";
        echo $passworderr ."<br>";
    }
    else{
        include_once "../model/usersModel.php"; login($id,$password);
           
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}