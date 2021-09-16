

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scheme</title>
</head>
<body>
  <center>  <br>
  <h1>Scheme</h1>
  <a href="../index.html">Back</a>
  <br>
 <?php
//	session_start();
$myfile = fopen("show.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);

?></center>



</body>
</html>