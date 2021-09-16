<?php


require('header.php');


?>
<title>Change Password</title>
</head>
<body bgcolor=" #ff8080">
    <?php
// define filepath & file name
define("filepath", "doctor.txt");
// define variables to empty values  
$fnameErr = $lnameErr = $genderErr = $dobErr = $rr = $pass_err = $usernameErr = $passwordErr = "";  
$fname = $lname = $gender = $dob = $religion = $praddress = $peaddress = $web =$phone = $email = $username = $password = "";  
$flag = false;
$successfulMessage = $errorMessage = "";
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["fname"])) 
    {  
        $fnameErr = " New Password Required"; 
        $flag = True;
    } 
  else{$newpassword=$_POST['fname'];}
    
	 if (empty($_POST["oldpassword"])) 
    {  
        $rr = "Old Password Required";
        $flag = True;  
    } 
     else{$oldpassword=$_POST['fname'];}
    
	
	
	
	
	
    if (empty($_POST["lname"])) 
    {  
        $lnameErr = "Confirmed Password Required";
        $flag = True;  
    } 
     else{$confirmpassword=$_POST['lname'];}
    
    if($confirmpassword != $newpassword)
    {
      $pass_err="CONFIRM PASSWORD DOES NOT MATCH";
      $flag = 0;
    }
	

}
?> 
<h1 style="text-align:center; background-color:White "  >Doctor Password</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
  <fieldset>
    <legend>Basic Information</legend>
	
	 <span style="color: red">*</span><label for=""><b style="background-color:#FF9999 ">Old Password</b></label>

    <input type="password" id="fname" name="oldpassword">
    <span style="color: red"><?php echo $rr; ?> </span> <br><br>
    
    <span style="color: red">*</span><label for="fname"><b style="background-color:#FF9999 ">New Password</b></label>

    <input type="password" id="fname" name="fname">
    <span style="color: red"><?php echo $fnameErr; ?> </span> <br><br>
	
	
	
	
	
    <span style="color: red">*</span><label for="lname"><b style="background-color:#FF9999 ">Confirm Password:</b></label>
    <input type="password" id="lname" name="lname">
    <span style="color: red"><?php echo $pass_err; ?> </span><br><br>
	
	
	
	
  </fieldset>
  
<br><input type="submit" value="Update">
</form>
 <br>
 <span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>

 
<?php


require('footer.php');


?>