<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
   <div>
	Welcome home
</div>
    <div class="dashboard">
        <a href="home.php">Home</a> <br>
        <a href="./AccountInfo.php">View Profile</a> <br>
        <a href="./EditProfile.php">Edit Profile</a><br>
        <a href="./ChangePassword.php">Change Password</a><br>
        <a href="../controller/logout.php">logout</a> <br>
        <a href="./CV.php">CV</a> <br>
        <a href="./Employees.php">Employees</a> <br>
        <a href="./Account.php">Account</a> <br>
    </div>
</body>
</html>
<?php
	
	}else{
		header('location: login.php');
	}
?>