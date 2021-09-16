<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>
body {
  font-family: Arial, Helvetica, sans-serif;


  /* background-image: url("/FINALproject/view/BG.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover; */
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
    <?php
// define filepath & file name
define("filepath", "data.txt");
// define variables to empty values  
$fname = $lname = $gender = $dob = $religion = $email = $username = $password = "";  
$fname = $lname = $gender = $dob = $religion = $praddress = $peaddress = $phone = $email = $username = $password = "";  
$flag = false;
$successfulMessage = $errorMessage = "";
//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


//String Validation  
    if (empty($_POST["fname"])) 
    {  
        $fname = " first Name is required"; 
        $flag = True;
    } 
  
    
    if (empty($_POST["lname"])) 
    {  
        $lname = " Last Name is required";
        $flag = True;  
    } 
     
    
    if (empty($_POST["gender"])) 
    {  
        $gender = " Gender is required";
        $flag = True;  
    } 
      

    if (empty($_POST["dob"])) 
    {  
        $dob = " Date of birth is required";
        $flag = True;  
    }  

    if (empty($_POST["religion"])) 
    {  
        $religion = " Religion is required";
        $flag = True;  
    } 


    if (empty($_POST["email"])) 
    {  
       $email = " Email is required";
       $flag = True;  
    } 

    if (empty($_POST["username"])) 
    {  
       $username = " Username is required";
       $flag = True;  
    } 

    if (empty($_POST["password"])) 
    {  
       $password = " Password is required";
       $flag = True;  
    } 

    
    if(!$flag) 
    {
      $fname = input_data($_POST["fname"]);
      $lname = input_data($_POST["lname"]);
      $gender = input_data($_POST["gender"]);
      $dob = input_data($_POST["dob"]);
      $religion = input_data($_POST["religion"]);
      $praddress = input_data($_POST["Praddress"]);
      $peaddress = input_data($_POST["Peaddress"]);
      $email = input_data($_POST["email"]);
      $phone = input_data($_POST["phone"]);
      $username = input_data($_POST["username"]);
      $password = input_data($_POST["password"]);

$fileData = read();
if(empty($fileData)) {
$data[] = array("fname" => $fname, "lname" => $lname,"gender" => $gender, "dob" => $dob,"religion" => $religion, "praddress" => $praddress,"peaddress" => $peaddress,"phone" => $phone,"email" => $email,"username" => $username,"password" => $password);
}
else {
$data = json_decode($fileData);
array_push($data, array("fname" => $fname, "lname" => $lname,"gender" => $gender, "dob" => $dob,"religion" => $religion, "praddress" => $praddress,"peaddress" => $peaddress,"phone" => $phone,"email" => $email,"username" => $username,"password" => $password));
}

 

$data_encode = json_encode($data);
write("");
$res = write($data_encode);
        if($res) {
        $successfulMessage = "Sucessfully Registered.";
        header("location:login.php");
        }
        else {
        $errorMessage = "Error while saving.";
        }
  
      }  
  }
  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

function write($content) {
$file = fopen(filepath, "w");
$fw = fwrite($file, $content . "\n");
fclose($file);
return $fw;
}

  
?> 
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
<div class="container">
    <h1 style="text-align:center">Registration Form</h1>
  <fieldset>
    <legend>Basic Information</legend>
    <hr>
    <span style="color: red">*</span><label for="fname"><b>Enter your first name:</b></label>
    <input type="text" id="fname" name="fname">
    <span style="color: red"><?php echo $fname; ?> </span> <br><br>
    <span style="color: red">*</span><label for="lname"><b>Enter your Last name:</b></label>
    <input type="text" id="lname" name="lname">
    <span style="color: red"><?php echo $lname; ?> </span><br><br>
    <span style="color: red">*</span><label for="gender"><b>Gender:</b></label>
    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="Male") echo "checked";?>value="male">
    <label for="Male">Male</label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="female">
    <label for="Female">Female</label><br>
    <span style="color: red"><?php echo $gender; ?> </span><br>
    <span style="color: red">*</span><label for="DOB"><b>Date of birth:</b></label>
    <input type="date" id="dob" name="dob"><br>
    <span style="color: red"><?php echo $dob; ?> </span><br>
    <span style="color: red">*</span><label for="religion"><b>Choose your Religion:</b></label>
    <select name="religion" id="religion">
    <option></option>
    <option value="Muslim">Muslim</option>
    <option value="Hindu">Hindu</option>
    <option value="Christian">Christian</option>
    </select>
    <span style="color: red"><?php echo $religion; ?> </span><br>
    
  </fieldset>
  <fieldset>
    <legend>Contact Information</legend>
    <label for="Praddress"><b>Enter your Present Address:</b></label>
    <textarea name="Praddress" rows="3" cols="30"></textarea><br><br>
    <label for="Peaddress"><b>Enter your Permanent Address:</b></label>
    <textarea name="Peaddress" rows="3" cols="30"></textarea><br><br>
    <label for="phone"><b>Enter your phone number:</b></label>
    <input type="tel" id="phone" name="phone" ><br><br>
    <span style="color: red">*</span><label for="email"><b>Enter your Email:</b></label>
    <input type="email" id="email" name="email">
    <span style="color: red"><?php echo $email; ?> </span><br><br>
  </fieldset>
    <fieldset>
    <legend>Account Information</legend>
    <span style="color: red">*</span><label for="username"><b>Enter your Username:</b></label>
    <input type="text" id="username" name="username">
    <span style="color: red"><?php echo $username; ?> </span><br><br>
    <span style="color: red">*</span><label for="password"><b>Enter your Password:</b></label>
    <input type="password" id="password" name="password">
    <span style="color: red"><?php echo $password; ?> </span><br><br>
  </fieldset>
   <button type="submit" class="registerbtn">Register</button>
  <hr>
  </div>
</form>
 <br>
 <span style="color: green"><?php echo $successfulMessage; ?></span>
<span style="color: red"><?php echo $errorMessage; ?></span>

 <?php
function read() {
$file = fopen(filepath, "r");
$fz = filesize(filepath);
$fr = "";
if($fz > 0) {
$fr = fread($file, $fz);
}
fclose($file);
return $fr;
}
?>
</body>
</html>