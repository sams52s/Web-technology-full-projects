<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>View Profile</title>
</head>
<body>
    <div class="pro">
    <fieldset>
            <legend> PROFILE:</legend>
                <table>
                    <tr>
                        <td>Full Name: </td>
                        <th><?=$_SESSION['user']['fname']?> </th>
                    </tr>
                    <tr>
                        <td>Username: </td>
                        <th><?=$_SESSION['user']['username']?></th>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <th><?=$_SESSION['user']['email']?> </th>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <th><?=$_SESSION['user']['gender']?> </th>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <th><?=$_SESSION['user']['Address']?> </th>
                    </tr>
                    <tr>
                        <td>Phone Number </td>
                        <th><?=$_SESSION['user']['phone']?> </th>
                    </tr>
                    <tr>
                        <td>Type </td>
                        <th><?=$_SESSION['user']['type']?> </th>
                    </tr>
                </table>
        </fieldset>
    </div>
    <div class="dashboard">
        <a href="./home.php">Home</a> <br>
        <a href="./viewProfile.php">View Profile</a> <br>
        <a href="./EditProfile.php">Edit Profile</a><br>
        <a href="./propic.php">Change Profile picture</a><br>
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