<?php
session_start();

if(isset($_SESSION['username']))
{

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/dashboard.css">
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

<div class="w3-container w3-dark-grey" style="margin-top:150px">



         <script>
         $(document).ready(function(){
              $('#insert').click(function(){
                   var image_name = $('#image').val();
                   if(image_name == '')
                   {
                        alert("Please Select Image");
                        return false;
                   }
                   else
                   {
                        var extension = $('#image').val().split('.').pop().toLowerCase();
                        if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                        {
                             alert('Invalid Image File');
                             $('#image').val('');
                             return false;
                        }
                   }
              });
         });
         </script>
    <link rel="stylesheet" href="../css/viewProfileStudent.css">
       </head>
       <body>
            <br /><br />
            <div class="container" >

                 <br />
                 <form method="post" action="../controller/changeProfilePicture.php" enctype="multipart/form-data">
                      <input  type="file" name="image" id="image" />
                      <br /><br>
                      <input type="submit" name="submit" id="submit"/>
                 </form>
                 <br />
                 <br />

            </div>
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
