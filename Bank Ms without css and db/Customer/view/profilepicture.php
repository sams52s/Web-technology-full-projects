<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<!DOCTYPE html>
<html>
<head>
    <style>
    </style>
    <title>Profile Picture</title>
</head>

<body>
    <div class="propic">
        <div class="right">
            <form action="../controller/page2/part2.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend><B>PROFILE PICTURE</B></legend> <br>
                    <div class="upPic">
                        <label for="fileToUpload">Upload Profile picture</label><br>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <br>
                    <hr>
                    <input type="submit" name="submit">
                </fieldset>
            </form>
        </div>
    </div>
    <div class="dashboard">
        <a href="./home.php">Home</a> <br>
        <a href="./viewProfile.php">View Profile</a> <br>
        <a href="./EditProfile.php">Edit Profile</a><br>
        <a href="./profilepicture.php">Change Profile picture</a><br>
        <a href="../controller/logout.php">logout</a> <br>
    </div>
</body>
<?php
	
	}else{
		header('location: login.php');
	}
?>
</html>