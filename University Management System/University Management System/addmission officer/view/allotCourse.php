<?php

session_start();
require_once "../javascript/allotCourse.php";
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
     <a href="allotCourse.php" class="w3-bar-item w3-button">Allot Course</a><br>
     <a href="addStudent.php" class="w3-bar-item w3-button">Add Student</a><br>
     <a href="liveSearch.php" class="w3-bar-item w3-button">Search Student</a><br>
     <a href="viewProfile.php" class="w3-bar-item w3-button w3-hover-black">View Profile</a><br>
     <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-green">Edit Profile</a><br>
     <a href="changeProfilePicture.php" class="w3-bar-item w3-button w3-hover-blue">Change Profile Picture</a><br>
     <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
     <a href="../controller/logout.php" class="w3-bar-item w3-button w3-hover-red">Logout</a><br>
</div>

<div style="margin-left:25%">

<div class="w3-container w3-dark-white" style="margin-top:50px">
  <form class="loginbox" onclick="return validation()" method="post" action="../controller/allotCourse.php">


    <p>Course Name:</p> <input type="text" onkeypress="checkName()" onblur="checkName()" name="name" id="name" placeholder="Enter Name">
    <br><br>
    <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
    <br>
     <p>Code:</p> <input type="text" onkeypress="checkCode()" onblur="checkCode()" name="code" id="code" placeholder="Enter code">
    <br><br>
    <span class="error" id="codeErr">* <?php if(!empty($_GET['codeErr'])){echo $_GET['codeErr'];} ?></span>
    <br>
    <p>Section:</p> <input type="text" onkeypress="checkSection()" onblur="checkSection()" name="section" id="section" placeholder="Enter section">
    <br><br>
    <span class="error" id="sectionErr">* <?php if(!empty($_GET['sectionErr'])){echo $_GET['sectionErr'];} ?></span>
    <br>
    <p>Class Time:</p> <input type="text"  onkeydown="checkTime()" onblur="checkTime()" name="time" id="time" placeholder="Enter time" >
    <br><br>
    <span class="error" id="timeErr">* <?php if(!empty($_GET['timeErr'])){echo $_GET['timeErr'];} ?></span>
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
header("location:../view/login.php");
}
 ?>
