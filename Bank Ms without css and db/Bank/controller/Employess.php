<?php
	session_start();
$myfile = fopen("../controller/bankinfo.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile); "<br>";

    ?>
    