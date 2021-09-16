<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
   <div>
	<form action="../controller/upload/upfile.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Upload File</legend>
			<table>
               <tr>
                   <td>Upload</td>
               </tr>
               <tr>
                   <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
               </tr>
				<tr>
					<td><input type="submit" name="submit" value="Upload"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
    <div class="dashboard">
        <a href="./home.php">Home</a> <br>
        <a href="./viewProfile.php">View Profile</a> <br>
        <a href="./EditProfile.php">Edit Profile</a><br>
        <a href="./ChangePassword.php">Change Password</a><br>
        <a href="../controller/logout.php">logout</a> <br>
    </div>
</body>
</html>
<?php
	
	}else{
		header('location: login.php');
	}
?>