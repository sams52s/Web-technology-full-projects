<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<center>
	<h1>Welcome To our Bank! <?=$_SESSION['user']['username']?> </h1>
	<a href="../controller/logout.php">logout</a> <br>
	<a href="viewProfile.php">view Profile</a>
	</center>
</body>
</html>

<?php
	
	}else{
		header('location: login.php');
	}
?>