<?php 
session_start();
$uid=$_SESSION["ID"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["post"])&&isset($_POST["pid"])){
        include_once "../model/postModel.php";
        update($_POST["pid"],$_POST["post"]);
    }
}
