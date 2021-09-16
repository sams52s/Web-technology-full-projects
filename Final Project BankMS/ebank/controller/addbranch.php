<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once "../model/adminModel.php";
        create($_POST["employees"],$_POST["vacancy"],$_POST["addressid"]);
}
else{
    echo   "error";
}