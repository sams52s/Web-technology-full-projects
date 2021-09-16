<?php
	session_start();
	if(isset($_POST['submit'])){
		$username= $_POST['username'];
		$email= $_POST['email'];
        $fname= $_POST['fname'];
		$gender= $_POST['gender'];
        $Address= $_POST['Address'];
		$phone= $_POST['phone'];
        if($username!=''){
            $_SESSION['user']['username']=$username;

        }
        if($email!='')
        {
            $_SESSION['user']['email']=$email;

        }
        if($fname!=''){
            $_SESSION['user']['fname']=$fname;

        }
        if($gender!='')
        {
            $_SESSION['user']['gender']=$gender;

        }
        if($Address!=''){
            $_SESSION['user']['Address']=$Address;

        }
        if($phone!='')
        {
            $_SESSION['user']['phone']=$phone;
            
        }
        header('location: ../view/AccountInfo.php');
	}else{
		echo "invalid request...";
	}

?>