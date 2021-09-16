<?php 
session_start();
$uid=$_SESSION["ID"];
$pass=$_SESSION["password"];
$acid = $Racid =$sent=$withdraw= $add= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "../model/accountModel.php";
    if(isset($_POST["add"])&&isset($_POST["acid"]))
    {
        addmoney($_POST["add"],$_POST["acid"]);
        header("Refresh: 0; url=../view/customer/index.php");
    }
    if(isset($_POST["withdraw"])&&isset($_POST["acid"])){
        Withdrowmoney($_POST["withdraw"],$_POST["acid"]);
        header("Refresh: 0; url=../view/customer/index.php");
    }
    if(isset($_POST["sent"])&&isset($_POST["acid"])&&isset($_POST["Racid"])){
        Withdrowmoney($_POST["sent"],$_POST["acid"]);
        header("Refresh: 0; url=../view/customer/index.php");
    }
    if(isset($_POST["dp"])&&$_POST["acid"])
    {
        if($_POST["dp"]==$pass)
        {
            delete($_POST["acid"]);
            header("Refresh: 0; url=../view/customer/index.php");
        }
    }
    
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}