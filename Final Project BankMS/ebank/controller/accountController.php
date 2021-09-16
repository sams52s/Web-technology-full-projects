<?php
session_start();
$at=$bid="";
$dt= date("d/m/y");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["atype"])&&isset($_POST["branchID"])){
        $userid= $_SESSION["ID"] ."<br>";
        $at=$_POST["atype"];
        $bid=$_POST["branchID"];
        $balance=0;
        include_once "../model/accountModel.php";
        create($userid,$at,$balance,$dt,$bid);
    }
}