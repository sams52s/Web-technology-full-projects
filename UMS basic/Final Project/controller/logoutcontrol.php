<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:../view/loginview.php");
	
}

else{
	header("location:../view/loginview.php");
}

 ?>