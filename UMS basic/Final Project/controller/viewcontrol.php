<?php
 require_once'../model/logged.php';  
if (isset($_SESSION['uname'])) {
require_once '../model/model.php';
$data = showData($_SESSION['ID']);

$id = $data["ID"];
$name = $data["name"];
$email = $data["email"];
$uname = $data["uname"];
}
else{
header("location:../view/loginview.php");
}

?>
