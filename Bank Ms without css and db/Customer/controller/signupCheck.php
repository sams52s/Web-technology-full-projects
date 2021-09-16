<?php
	session_start();
    $fnameErr = $unameErr = $emailErr = $phoneNumberErr =$genderErr =$passwordErr = $cpasswordErr =$addressErr =$picErr =$cvErr ="";
    $fname = $uname = $email = $phoneNumber =$gender =$password = $cpassword =$address =$pic =$cv ="";
	$flag=0;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		    if (empty($_POST["fname"])) {
               $fnameErr = "Full name is required";
			   $flag=1;
            }else {
               $fname = test_input($_POST["fname"]);
            }	
			if (empty($_POST["uname"])) {
               $unameErr = "user name is required";
			   $flag=1;
            }else {
               $uname = test_input($_POST["uname"]);
            }
			if (empty($_POST["email"])) {
               $emailErr = "email is required";
			   $flag=1;
            }else {
               $email = test_input($_POST["email"]);
            }	
			if (empty($_POST["password"])) {
               $passwordErr = "password is required";
			   $flag=1;
            }else {
               $password = test_input($_POST["password"]);
			}
            if (empty($_POST["cpassword"])) {
               $cpasswordErr = "Confirm password is required";
			   $flag=1;
            }else {
               $cpassword = test_input($_POST["cpassword"]);
               if($cpassword!=$password)
               {
                $cpasswordErr = "Confirm password didn't match";
                $flag=1;
            }
			}
  		    $phoneNumber = test_input($_POST["phoneNumber"]);
  		    $address = test_input($_POST["address"]);
  		    if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            }else {
                $gender = test_input($_POST["gender"]);
            }
			/*$user =['username'=> $uname, 'fname'=>$fname, 'password'=>$password, 'email'=>$email,'phone' =>$phoneNumber,'Address' =>$Address,'gender' =>$gender];
			$_SESSION['user'] = $user;*/
    }
	else{
		echo "invalid request...";
	}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if($flag==1){
echo $unameErr;
echo $emailErr;
echo $emailErr;
echo $genderErr;
echo $cpasswordErr;
echo $passwordErr;
header("refresh: 2; url = ../view/signup.php");
}
else
{
    $myfile = fopen("reginfo.txt", "a") or die("Unable to open file!");
    $txt = $uname."|".$password."|".$fname."|".$email."|".$phoneNumber."|".$gender ."|".$address."\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    echo "Application successful";
    header("refresh: 2; url = ../view/login.php");
}
?>