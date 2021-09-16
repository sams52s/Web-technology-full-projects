<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["post"])){
        include_once "../model/postModel.php";
        create($_SESSION["ID"],$_SESSION["username"],$_POST["post"]);
    }
}