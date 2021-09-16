<?php


require('header.php');


?>
<style>

body{
  background-image: url("doctor.jpg");
 background-color: #ff8080;
}

</style>

<title>Add Doctor</title>
</head>
<body bgcolor=" #ffa64d">
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
      $web = input_data($_POST["web"]);
      $username = input_data($_POST["username"]);
      $password = input_data($_POST["password"]);

$fileData = read();
if(empty($fileData)) {
$data[] = array("fname" => $fname, "lname" => $lname,"gender" => $gender, "dob" => $dob,"religion" => $religion, "praddress" => $praddress,"peaddress" => $peaddress,"phone" => $phone,"email" => $email,"web" => $web,"username" => $username,"password" => $password);
}
else {
$data = json_decode($fileData);
array_push($data, array("fname" => $fname, "lname" => $lname,"gender" => $gender, "dob" => $dob,"religion" => $religion, "praddress" => $praddress,"peaddress" => $peaddress,"phone" => $phone,"email" => $email,"web" => $web,"username" => $username,"password" => $password));
}

 

$data_encode = json_encode($data);
write("");
$res = write($data_encode);
        if($res) {
        $successfulMessage = "Sucessfully Done.";
       // header("location:login.php");
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
<h1 style="text-align:center; background-color:White "  >Doctor Info</h1>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
  <fieldset>
    <legend>Basic Information</legend>
    
    <span style="color: red">*</span><label for="fname"><b style="background-color:#FF9999 ">Enter your first name:</b></label>

    <input type="text" id="fname" name="fname">
    <span style="color: red"><?php echo $fnameErr; ?> </span> <br><br>
    <span style="color: red">*</span><label for="lname"> <b style="background-color:#FF9999 ">Enter your Last name:</b></label>
    <input type="text" id="lname" name="lname">
    <span style="color: red"><?php echo $lnameErr; ?> </span><br><br>
    <span style="color: red">*</span><label for="gender"> <b style="background-color:#FF9999 ">Gender:</b></label>
    <input type="radio" name="gender"<?php if (isset($gender) && $gender=="Male") echo "checked";?>value="male">
    <label for="Male">Male</label>
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="female">
    <label for="Female">Female</label><br>
    <span style="color: red"><?php echo $genderErr; ?> </span><br>
    <span style="color: red">*</span><label for="DOB"> <b style="background-color:#FF9999">Date of birth:</b></label>
    <input type="date" id="dob" name="dob"><br>
    <span style="color: red"><?php echo $dobErr; ?> </span><br>
    <span style="color: red">*</span><label for="religion"> <b style="background-color:#FF9999 ">Choose your Religion:</b></label>
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
    <label for="Praddress"> <b style="background-color:#FF9999 "> Enter your Present Address:</b></label>
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
  <br><br><input type="submit" value="Submit">
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
<?php


require('footer.php');


?>