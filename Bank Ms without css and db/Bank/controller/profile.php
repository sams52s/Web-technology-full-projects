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
            header('location: ../view/viewProfile.php');
        }
        if($email!='')
        {
            $_SESSION['user']['email']=$email;
            header('location: ../view/viewProfile.php');
        }
        if($fname!=''){
            $_SESSION['user']['fname']=$fname;
            header('location: ../view/viewProfile.php');
        }
        if($gender!='')
        {
            $_SESSION['user']['gender']=$gender;
            header('location: ../view/viewProfile.php');
        }
        if($Address!=''){
            $_SESSION['user']['Address']=$Address;
            header('location: ../view/viewProfile.php');
        }
        if($phone!='')
        {
            $_SESSION['user']['phone']=$phone;
            header('location: ../view/viewProfile.php');
        }
	}else{
		echo "invalid request...";
	}

?>