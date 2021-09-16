<?php require_once '../controller/communitycontrol.php' ?>
<?php require_once '../model/logged.php' ?>

<!DOCTYPE html>
<html>
<head>
	<title>Community</title>
</head>
<body>

<fieldset>
	<legend>Write Your Post</legend>
	<form method="POST">
     <textarea  placeholder="Write here..." name="textarea" rows="15" cols="50"> </textarea> </br><hr>
     <input type="submit" name="Post" value="Post">
     <input type="reset" name="Reset" value="Reset">

</form>
</fieldset>


<fieldset>

<?php
echo "<h2>Your Post:</h2>";
echo $textarea;
?>

</fieldset>

</body>
</html>
<?php require_once'../model/footer.php' ?>