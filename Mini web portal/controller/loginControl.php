<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$id = $_POST['id'];
		$password = $_POST['password'];
		if($id != '' && $password != ''){
					$_SESSION['flag'] = 'true';
                    $_SESSION["id"]="$id";
					setcookie('flag','true',time()+300,'/');
					include '../model/userModel.php';
                    login($id,$password);
		}else{
			echo "null value found...";
            header('refresh: 2; url = ../view/login.php');
		}
	}else{
		echo "invalid request...";
        header('refresh: 2; url = ../view/login.php');
	}
?>