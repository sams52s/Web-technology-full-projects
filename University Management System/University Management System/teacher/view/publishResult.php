<?php

session_start();
require_once "../javascript/Registration.php";
if(isset($_SESSION['username']))
{

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/Registration.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  </head>
  <body>

    <ul>
      <li style="float:left"><a href="../../homepage.php"> ABC UNIVERSITY</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
     <!-- <li><a href="#news">Registration</a></li> -->
     <li><a href="../../homepage.php">Home</a></li>
    </ul>

    <!-- <?php include("viewProfileStudentView.php") ?> -->
 <!-- <div class='sidenav'>
    <br><a href='dashboardStudentView.php'>Dashboard</a>
    <br><a href='postAdStudentView.php'>Post ad</a> -->
    <!-- <br><a href='viewProfileStudentView.php'>View Profile</a> -->
    <!-- <br><a href='editProfileStudentView.php'>Edit Profile</a> -->
    <!-- <br><a href='changeProfilePictureView.php'>Change Profile Picture</a> -->
   <!-- <br><a href='changePasswordStudentView.php'>Change Password</a>
     <br><a href ='../Controller/logoutStudentController.php'>Logout </a>
   </div > -->

   <div class="w3-sidebar w3-bar-block w3-light-grey" style="width:25%">
     <a href="dashboard.php" class="w3-bar-item w3-button">Dashboard</a><br>
     <a href="publishResult.php" class="w3-bar-item w3-button">Publish Result</a><br>
     <a href="liveSearch.php" class="w3-bar-item w3-button">Search Student Result</a><br>
     <a href="viewProfile.php" class="w3-bar-item w3-button w3-hover-black">View Profile</a><br>
     <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-green">Edit Profile</a><br>
     <a href="changeProfilePicture.php" class="w3-bar-item w3-button w3-hover-blue">Change Profile Picture</a><br>
     <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
     <a href="../controller/logout.php" class="w3-bar-item w3-button w3-hover-red">Logout</a><br>
</div>

<div style="margin-left:25%">

<div class="w3-container w3-dark-white" style="margin-top:50px">
  <form class="loginbox" onclick="return validation()" method="post" action="../controller/publishResult.php">


    <p>Name:</p> <input type="text" onkeypress="checkName()" onblur="checkName()" name="name" id="name" placeholder="Enter Name">
    <br><br>
    <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
    <br>
     <p>E-mail:</p> <input type="text" onkeypress="checkEmail()" onblur="checkEmail()" name="email" id="email" placeholder="Enter Email">
    <br><br>
    <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
    <br>
    <p>Course Name:</p> <input type="text" onkeypress="checkCourse()" onblur="checkCourse()" name="course" id="course" placeholder="Enter course">
    <br><br>
    <span class="error" id="courseErr">* <?php if(!empty($_GET['courseErr'])){echo $_GET['courseErr'];} ?></span>
    <br>

    <p>Result:</p> <input type="text" onkeypress="checkResult()" onblur="checkResult()" name="result" id="result" placeholder="Enter result ">
    <br><br>
    <span class="error" id="resultErr">* <?php if(!empty($_GET['resultErr'])){echo $_GET['resultErr'];} ?></span>
    <br>


    <input type="submit" name="submit" value="Submit">
  </form>
</div>



</div>



  </body>
</html>





<?php
//include("../Model/foot.php");

}
else {
header("Course:../view/login.php");
}
 ?>
