<?php
$token = "";
$token1="";
session_start();
if(isset($_SESSION["username"])){
    echo "Welcome to Admin Dashboard";
    echo " ";
    $token= "signout.php";
    $token1="Sign Out";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<?php require_once 'adminprocess.php';?>
<body>
<h1>Admin Info:</h1>
<br>
<div class="dbtable">
<?php
//$conn = mysqli_connect('localhost','root','','studybuddy');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,username, firstname, lastname,email,institution FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Id </th><th>User Name </th><th>First name </th><th>Last name </th><th>Email </th><th>Institution </th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["institution"]. "</td></tr> ";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</div>
<br><hr> <hr>
    <center>
        <form action="adminprocess.php" method="POST">
        <div>
        <label for="ID">ID :</label>
        <input type="text" name="id" id="id" >
    </div>
        <div>
        <label for="username">User Name :</label>
        <input type="text" name="username" id="username" >
    </div>
    <div>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required > <br>
        <button > <a href="ChangePassword.php">Change Password</a> </button>
        <span>*</span>
    </div>
    <div>
        <label for="firstname">First Name :</label>
        <input type="text" name="firstname" id="firstname" > 
    </div>
    <div>
        <label for="lastname">Last Name :</label>
        <input type="text" name="lastname" id="lastname" >
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" >
    </div>
    <div>
        <label for="institution">Institution :</label>
        <input type="text" name="institution" id="institution" >
    </div>
        <br> <hr>
        <button type="submit" name="save">Add Admin</button>
        <button type="reset" >Reset form</button> <br>
        <button type="submit" name="edit">Edit Admin</button>
        <button type="submit" name="delete">Delete Admin</button>
        <br>
        </form>
    </center>

    
    <a href=<?php echo $token; ?>><?php echo $token1; ?></a>
</body>
<?php
	
	}else{
		header('location: login.php');
	}
    ?>
</html>