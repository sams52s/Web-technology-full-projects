<?php
$myfile = fopen("admininfo.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("admininfo.txt"))."<br>";
fclose($myfile);

echo '<br><a href="../view/home.php">Back</a> <br>';

?>