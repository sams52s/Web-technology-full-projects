<?php
	session_start();
	if(isset($_SESSION['flag'])){
        $n=$_SESSION['user']['username'];
        $fname = $uname = $email = $phoneNumber =$gender =$address ="";
            $myFile = "../controller/reginfo.txt";
		    $contents = file_get_contents($myFile);
			$contents = explode("\n", $contents);
			foreach($contents as $values){
			$loginInfo = explode("|", $values);
			$user = $loginInfo[0];
            if(trim($user) == $n){
                    /*$fname=$loginInfo[2];
                    $email=$loginInfo[3];
                    $phoneNumber=$loginInfo[4];
                    $gender=$loginInfo[5];*/
                    $address=$loginInfo[6];
                    $education=$loginInfo[7];
                    $field=$loginInfo[8];
				}
                //echo '$_SESSION['user']['username']';
            }
                    $fname=$_SESSION['user']['fname'];
                    $email=$_SESSION['user']['email'];
                    $phoneNumber=$_SESSION['user']['phone'];
                    $gender=$_SESSION['user']['gender'];
                   // $address=$_SESSION['user']['Address'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <h1>Your Account</h1>
                <table>
                    <tr>
                        <td>Full Name: </td>
                        <th><?="$fname"?></th>
                    </tr>
                    <tr>
                        <td>Username: </td>
                        <th><?= "$n"?></th>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <th><?= "$email"?> </th>
                    </tr>
                    <tr>
                        <td>Gender </td>
                        <th><?=" $gender"?> </th>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <th><?="$address"?> </th>
                    </tr>
                    <tr>
                        <td>Phone Number </td>
                        <th><?= "$phoneNumber"?></th>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td>Education </td>
                        <th><?= "$education"?></th>
						
                    </tr>
					<tr>
                        <td>Field </td>
                        <th><?= "$field"?></th>
						
                    </tr>
                </table>
        </fieldset>
    </div>
<div class="dashboard">
        <a href="home.php">Home</a> <br>
        <a href="./AccountInfo.php">View Profile</a> <br>
        <a href="./EditProfile.php">Edit Profile</a><br>
        <a href="../controller/logout.php">logout</a> <br>

    </div>
    
</body>
</html>
<?php
	
	}else{
        echo"Error";
		//header('location: login.php');
	}
?>