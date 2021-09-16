<?php 

session_start();
//include 'model.php';
require_once '../model/model.php';

$uname = $password = " ";
$unameErr = $passwordErr = " ";




if (isset($_POST['uname'])) 
   {
        $data = searchUser($_POST['uname']);
        if($data != null)
        {
            $uname = $data['uname'];
            $pass = $data['password'];
            $id = $data['ID'];
        

            if ($_POST['uname']==$uname && $_POST['password']==$pass) 
            {
                $_SESSION['uname'] = $uname;
                $_SESSION['ID'] = $id;
                header("location:../controller/dashboardcontrol.php");
            }

        }

    }
   if (isset($_POST['uname']))
    {
        if (empty($_POST['uname'])) 
        {
            $unameErr = "user name is required";
        }
        else if (empty($_POST['password']))
        {
            $passwordErr = "password is required";
        }
        else
        {
            echo "User Name or Password invalid";
        }
    }




?>