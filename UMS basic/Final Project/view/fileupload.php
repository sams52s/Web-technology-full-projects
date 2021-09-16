<?php require_once'../model/logged.php'?>

<!DOCTYPE html>
<html>
<body>
	<?php //session_start();
	//echo "Logged in as &nbsp". $_SESSION['uname']."<br>" ?>
<fieldset>

	<legend>Upload Picture</legend>
<form action="upload.php" method="post" enctype="multipart/form-data">
  <b>Select image to upload:</b>
  <input type="file" name="fileToUpload" id="fileToUpload"><br><hr>
  <input type="submit" value="Upload Image" name="submit">
</form>
</fieldset>

</body>
</html>

<?php require_once '../model/footer.php'?>