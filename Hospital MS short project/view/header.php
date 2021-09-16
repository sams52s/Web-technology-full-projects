<?php


session_start();


?>
<style>

body{
	background-image: url("Hospital.jpg");
 background-color: #ff8080;
}


</style>
<!DOCTYPE html>
<html>
<title>Moderator Panel</title>

<body bgcolor=" #ff0066" class="w3-light-grey w3-content" style="max-width:1600px">
<h1 style="color: #ffffff" text align="center" ><b style="background-color:#FF9999 ">Moderator Panel</b></h1>

<a href="../controller/destroy.php" style="color:red;margin-left:90%"; class="button">Log Out</a>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
 
  <div class="w3-bar-block">
   <a href=""></i>Moderator</a><br><br>
    <a href="add-doctor.php"></i>Add Doctor</a> <br><br>
	 <a href="drinfo.php"></i>Doctor Information</a> <br><br>
    <a href="updateprofile.php"></i>Update Profile</a> <br><br>
    <a href="changepass.php" ></i>Change Password</a> <br><br>
    
  </div>
 
</nav>