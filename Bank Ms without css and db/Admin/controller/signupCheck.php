<?php
	session_start();
 		$fnameErr = $emailErr = $genderErr = $websiteErr = "";
         $fname=$username= $password = $email = $gender = $Address = $phone = "";
	$flag=0;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["fname"])) {
				$fnameErr = "full name is required";
				$flag=1;
				}else {
				$fname = test_input($_POST["fname"]);
				}	
				if (empty($_POST["username"])) {
				$usernameErr = "user name is required";
				$flag=1;
				}else {
				$username = test_input($_POST["username"]);
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
			$phone = test_input($_POST["phone"]);
			$Address = test_input($_POST["Address"]);
			if (empty($_POST["gender"])) {
				$genderErr = "Gender is required";
				}else {
				$gender = test_input($_POST["gender"]);
				}
			$type= $_POST['type'];
			if($username != '' && $password != '' && $email != ''){
				$user =['username'=> $username, 'fname'=>$fname, 'password'=>$password, 'email'=>$email,'phone' =>$phone,'Address' =>$Address,'gender' =>$gender, 'type'=>$type];
				$_SESSION['user'] = $user;
				$reg = fopen("reginfo.txt", "a") or die("Unable to open file!");
				$txt = $username. "|". $fname. "|".$password. "|".$email ."|". $phone."|".$Address."|".$gender."|".$type. "\n";
				fwrite($reg, $txt);
				fclose($reg);
				header('location: ../view/login.php');
			}else{
				echo "null value found...";
			}
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
?>