<?php


require('header.php');


?>
<style>

body{
  background-image: url("doctor.jpg");
 background-color: #ff8080;
}

</style>

<title> Update Doctor</title>
</head>
<body bgcolor="#ffa64d">
    <?php
// define filepath & file name
define("filepath", "doctor.txt");
// define variables to empty values  
$fnameErr = $lnameErr = $genderErr = $dobErr = $religionErr = $emailErr = $usernameErr = $passwordErr = "";  
$fname = $lname = $gender = $dob = $religion = $praddress = $peaddress = $web =$phone = $email = $username = $password = "";  
$flag = false;
$successfulMessage = $errorMessage = "";
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["fname"])) 
    {  
        $fnameErr = " first Name is required"; 
        $flag = True;
    } 
  
    
    if (empty($_POST["lname"])) 
    {  
        $lnameErr = " Last Name is required";
        $flag = True;  
    } 
     
    
    if (empty($_POST["gender"])) 
    {  
        $genderErr = " Gender is required";
        $flag = True;  
    } 
      

    if (empty($_POST["dob"])) 
    {  
        $dobErr = " Date of birth is required";
        $flag = True;  
    }  

    if (empty($_POST["religion"])) 
    {  
        $religionErr = " Religion is required";
        $flag = True;  
    } 


    if (empty($_POST["email"])) 
    {  
       $emailErr = " Email is required";
       $flag = True;  
    } 

    if (empty($_POST["username"])) 
    {  
       $usernameErr = " Username is required";
       $flag = True;  
    } 

    if (empty($_POST["password"])) 
    {  
       $passwordErr = " Password is required";
       $flag = True;  
    }
	else{
 echo '<script>';  
echo 'alert("Updated")';  
echo '</script>';  
	}

}
?> 
<h1 style="text-align:center; background-color:White "  > Update Doctor Profile</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
  <fieldset>
    <legend>Basic Information</legend>
    
    <span style="color: red">*</span><label for="fname"><b style="background-color:#FF9999 ">Enter your first name:</b></label>

    <input type="text" id="fname" name="fname">
    <span style="color: red"><?php echo $fnameErr; ?> </span> <br><br>
    <span style="color: red">*</span><label for="lname"><b style="background-color:#FF9999 ">Enter your Last name:</b></label>
    <input type="text" id="lname" name="lname">
    <span style="color: red"><?php echo $lnameErr; ?> </span><br><br>
    <span style="color: red">*</span><label for="gender"><b style="background-color:#FF9999 ">Gender :</b></label>
    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="Male") echo "checked";?>value="male">
    <label for="Male">Male</label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="female">
    <label for="Female">Female</label><br>
    <span style="color: red"><?php echo $genderErr; ?> </span><br>
    <span style="color: red">*</span><label for="DOB"><b style="background-color:#FF9999 ">Date of birth:</b></label>
    <input type="date" id="dob" name="dob"><br>
    <span style="color: red"><?php echo $dobErr; ?> </span><br>
    <span style="color: red">*</span><label for="religion"><b style="background-color:#FF9999 ">Choose your Religion:</b></label>
    <select name="religion" id="religion">
    <option></option>
    <option value="Muslim">Muslim</option>
    <option value="Hindu">Hindu</option>
    <option value="Christian">Christian</option>
    </select>
    <span style="color: red"><?php echo $religionErr; ?> </span><br>
    
  </fieldset>
  <fieldset>
    <legend>Contact Information</legend>
    <label for="Praddress"><b style="background-color:#FF9999 ">Enter your Present Address:</b></label>
    <textarea name="Praddress" rows="3" cols="30"></textarea><br><br>
    <label for="Peaddress"><b style="background-color:#FF9999 ">Enter your Permanent Address:</b></label>
    <textarea name="Peaddress" rows="3" cols="30"></textarea><br><br>
    <label for="phone"><b style="background-color:#FF9999 ">Enter your phone number:</b></label>
    <input type="tel" id="phone" name="phone" ><br><br>
    <span style="color: red">*</span><label for="email"><b style="background-color:#FF9999 ">Enter your Email:</b></label>
    <input type="email" id="email" name="email">
    <span style="color: red"><?php echo $emailErr; ?> </span><br><br>
    <label for="web"><b style="background-color:#FF9999 ">Enter your Personal Website link:</b></label>
    <input type="url" id="web" name="web">
  </fieldset>
    <fieldset>
    <legend>Account Information</legend>
    <span style="color: red">*</span><label for="username"><b style="background-color:#FF9999 ">Enter your Username:</b></label>
    <input type="text" id="username" name="username">
    <span style="color: red"><?php echo $usernameErr; ?> </span><br><br>
    <span style="color: red">*</span><label for="password"><b style="background-color:#FF9999 ">Enter your Password:</b></label>
    <input type="password" id="password" name="password">
    <span style="color: red"><?php echo $passwordErr; ?> </span><br><br>
  </fieldset>
  <br><br><input type="submit" value="Update">
</form>
 <br>
 <span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>

 
<?php


require('footer.php');


?>