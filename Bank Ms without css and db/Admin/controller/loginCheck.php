<?php
	session_start();
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		if($username != '' && $password != ''){
			if($username=="admin"&&$password="admin"){
					$_SESSION['flag'] = 'true';
					setcookie('flag','true',time()+300,'/');
					$file = fopen("reginfo.txt","r");
					$data= fgets($file). "<br />";
					$reg=explode('|',$data);
					if($reg[0]=$username && $reg[1]=$password){
						echo "done";
					}
					fclose($file);
					header('location: ../view/home.php');
			}
			else{
				echo 'invlaid username/password';
			}
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}
?>