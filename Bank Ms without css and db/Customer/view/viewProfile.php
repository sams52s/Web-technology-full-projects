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
<html>
<head>
	<title>View Profile</title>
</head>
<body>
    <div class="pro">
    <fieldset>
            <legend> PROFILE:</legend>
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
                </table>
        </fieldset>
    </div>
    <div class="dashboard">
        <a href="./home.php">Home</a> <br>
        <a href="./viewProfile.php">View Profile</a> <br>
        <a href="./EditProfile.php">Edit Profile</a><br>
        <a href="./ChangePassword.php">Change Password</a><br>
        <a href="../controller/logout.php">logout</a> <br>
        <a href="./CV.php">CV</a> <br>
        <a href="./Employees.php">Employees</a> <br>
        <a href="./Account.php">Account</a> <br>
        
    </div>
    
</body>
</html>
<?php
	
	}else{
		header('location: login.php');
	}
?>