<?php 
session_start();
$uid=$_SESSION["ID"];
$pass=$_SESSION["password"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "../model/postModel.php";
    if(isset($_POST["adp"])&&$_POST["cid"])
    {
        if($_POST["adp"]==$pass)
        {
            delete($_POST["cid"]);
            header("Refresh: 0; url=../view/admin/");
        }
    }
    
}
