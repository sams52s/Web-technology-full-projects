<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 10%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

</head>
<body>
<?php 
$username = $password = "";
$logIn = "";
$flag = false;
define("filepath", "data.txt");
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 


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

    $username = input_data($_POST["username"]);
    $password = input_data($_POST["password"]); 
    $fileData = read();
    $users=json_decode($fileData);
	foreach($users as $user)
	{
	if($user->username === $username && $user->password === $password)
	$flag = true;
	}
    if($flag)
    {
      session_start();
      setcookie("test_cookie", "test", time() + 3600, '/');
      $_SESSION['username']=$username;

	header("Location: welcomepage.php");
    }
    else 
    {
	$logIn =  "Failed";
    }
    }
}
  function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

?>



	<h2 text align="center" >LogIn</h2>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<div class="imgcontainer">
    <img src="img_avatar.png" alt="Avatar" class="avatar">
  </div>
    <div class="container">
		<fieldset>
			<legend style=" text-align:center;" >LogIn</legend>

			<span style="color: red">*</span><label for="username">User Name:</label>
			<input type="text" name="username" id="username" >
			<span style="color: red"><?php echo $username; ?> </span><br><br>

			<span style="color: red">*</span><label for="password">Password:</label>
			<input type="password" name="password" id="password" >
			<span style="color: red"><?php echo $password; ?> </span><br><br>
      
      <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

		</fieldset>
    </div>
    
	</form>
 <?php
 echo "<h4>". $logIn . "</h4>" ;
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