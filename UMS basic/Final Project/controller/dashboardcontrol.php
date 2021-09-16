<?php require_once'../model/logged.php'?>


<?php 




if (isset($_SESSION['uname'])) {
	//echo "<h1> Welcome ".$_SESSION['uname']."</h2>";
	echo "<a href='../view/viewprofile.php'>View Profile</a><br>";
	echo "<a href='../view/communityview.php'>Your Community</a><br>";
	echo "<a href='../view/fileupload.php'>Upload Picture</a><br>";
	//echo "<a href='../view/editpassword.php'>Reset Password</a><br>";
	echo "<a href='../view/editview.php'>Edit Profile</a><br>";
	echo "<a href='../view/livesearch.php'>Live Search</a><br>";
	//echo "<br><a href='logout.php'>Logout</a><br>";


}
else{
		$msg="error";
		header("location:../view/loginview.php");

	}

 ?>

 <?php require_once'../model/footer.php'  ?>