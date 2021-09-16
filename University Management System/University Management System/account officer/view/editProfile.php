<?php



session_start();
require_once '../controller/Info.php';
$data = fetch($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $student):

       $name= $student['NAME'] ;
       $email=$student['EMAIL'];
       $phone=$student['PHONE'];
      // $details=$student['DETAILS'];

  endforeach;

}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="../css/editProfile.css">
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




  <div class="w3-sidebar w3-bar-block w3-light-grey" style="width:25%">
    <a href="dashboard.php" class="w3-bar-item w3-button">Dashboard</a><br>
    <a href="payroll.php" class="w3-bar-item w3-button">Employee Payroll</a><br>
    <a href="liveSearch.php" class="w3-bar-item w3-button">Employee Payment Status</a><br>
    <a href="viewProfile.php" class="w3-bar-item w3-button w3-hover-black">View Profile</a><br>
    <a href="editProfile.php" class="w3-bar-item w3-button w3-hover-green">Edit Profile</a><br>
    <a href="changeProfilePicture.php" class="w3-bar-item w3-button w3-hover-blue">Change Profile Picture</a><br>
    <a href="changePassword.php" class="w3-bar-item w3-button w3-hover-red">Change Password</a><br>
    <a href="../controller/logout.php" class="w3-bar-item w3-button w3-hover-red">Logout</a><br>
 </div>

 <div style="margin-left:25%">

 <div class="w3-container w3-dark-white" style="margin-top:0px">
   <form  class="loginbox" onsubmit="return validation()"action="../controller/update.php" method="POST" enctype="multipart/form-data">

   <br><br>
  <h2>Edit Profile</h2>
   <br><br><br>
    <label for="name">Name:</label><br><br>
    <input value="<?php echo $name ?>" type="text" id="name" name="name" onkeyup="checkName()" onblur="checkName()"><br><br>
    <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span> <br><br>
    <label for="email">Email:</label><br><br>
    <input value="<?php echo $email ?>" type="text" id="email" name="email" onkeyup="checkEmail()" onblur="checkEmail()"><br><br>
    <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
    <label for="email">Phone:</label><br><br>
    <input value="<?php echo $phone ?>" type="text" id="phone" name="phone" onkeyup="checkPhone()" onblur="checkPhone()"><br><br>
    <span class="error" id="phoneErr">* <?php if(!empty($_GET['phoneErr'])){echo $_GET['phoneErr'];} ?></span>
    <br><br><br>

    <!-- Tell About Yourself: <input type="text" value="<?php echo "$details"; ?> "name="details" size="75">
    <br><br><br><br> -->

    <input type="submit" name = "update" value="Update">
  </form>

 </div>



 </div>









</body>
</html>

<?php
require_once "../javascript/editProfile.php";
?>
