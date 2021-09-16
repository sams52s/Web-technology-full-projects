<?php
session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname= $_POST['uname'];
		$password= $_POST['password'];
		if($uname != '' && $password != ''){
				$myFile = "reginfo.txt";
				$contents = file_get_contents($myFile);
				$contents = explode("\n", $contents);
				foreach($contents as $values){
				$loginInfo = explode("|", $values);
					$user = $loginInfo[0];
					$pass = $loginInfo[1];
				if(trim($user) == $_POST['uname'] &&  trim($pass) == $_POST['password']){
					$fname=$loginInfo[2];
                    $email=$loginInfo[3];
                    $phoneNumber=$loginInfo[4];
                    $gender=$loginInfo[5];
                    $address=$loginInfo[6];
                    $education=$loginInfo[7];
                    $field=$loginInfo[8];
					$users =['username'=> $uname, 'fname'=>$fname, 'password'=>$password, 'email'=>$email,'phone' =>$phoneNumber,'Address' =>$Address,'gender' =>$gender,'field' =>$field,'education' =>$education,'type' =>$type];
					$_SESSION['user'] = $users;
					$_SESSION['flag']= 'true';
					echo "Login successful";
					header("refresh: 0; url = ../view/viewProfile.php");
				}
				
				else{
					echo "Please verify your username and password.";
				}
				
			}
		}else{
			echo "null value found...";

		}
	}else{
		echo "invalid request...";

	}
	echo "<br><br><br>";
	//header("refresh: 0; url = ../view/login.php");
	//echo '<a href="../view/login.php">Back</a>';
?>