<?php
session_start();
$aDate= date("d/m/y");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["Name"])&&isset($_POST["date"])&&isset($_POST["workerID"])){
        $Statuse="Pending";
        include_once "../model/workerModel.php.php";
        create($_POST["Name"],$Statuse,$aDate,$_POST["date"],$_POST["workerID"]);
    }
}