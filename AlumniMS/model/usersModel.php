<?php
function create($fname,$uname,$email,$phoneNumber,$gender,$password,$dob,$area,$city,$userType){
        $address=2;
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="alumnims";
        //create connection..
        try{
        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        if(mysqli_connect_error())
        {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        
        }
        else{
            $SELECT= "SELECT email From users Where email=? Limit 1"; 
            $INSERT = "INSERT INTO users (fname,username,password,phone,email,gender,dob,userType)VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param('s',$email);
            $stmt->execute();
            $stmt->bind_result($mail);
            $stmt->store_result();
            $rnum=$stmt->num_rows;
            if($rnum==0)
            {
                $usid="";
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssssssss",$fname,$uname,$password,$phoneNumber,$email,$gender,$dob,$userType);
                $stmt->execute();
                echo"<br> User Added successfully Done <br>";
                header("Refresh: 2; url=../view/users/login.php");
            }
            else{
                echo"Already an account registard by this mail. New mail id requiared";
                header("Refresh: 2; url=../view/users/registration.html");
            }
            $stmt->close();
            $conn->close();
        }
}
function login($ID,$password){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="alumnims";
        //create connection..
        try{
        $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        if(mysqli_connect_error())
        {
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        
        }
        else{
            $ID = mysqli_real_escape_string($conn, stripcslashes($ID));  
            $password = mysqli_real_escape_string($conn, stripcslashes($password));  
            $SELECT= "SELECT * From users Where ID='$ID' and password='$password'"; 
            $result = mysqli_query($conn, $SELECT);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result); 
            if($count==0)
            {
                echo" ID not found".'<br>'."Wrong password";
                header("Refresh: 3; url=../view/users/login.php");
            }
            else{
                session_start();
                $_SESSION["ID"]=$ID;
                $_SESSION["password"]=$password;
                $_SESSION["username"]=$row["username"];
                $_SESSION["userType"]=$row["userType"];
                if($_SESSION["userType"]=="Student")
                {
                    header("Refresh: 0; url=../view/users/viewProfile.php");
                }
                if($_SESSION["userType"]=="Admin")
                {
                    header("Refresh: 0; url=../view/admin/index.php");
                }
                if($_SESSION["userType"]=="Alumni")
                {
                    header("Refresh: 0; url=../view/Alumni/viewProfile.php");
                }
            }
        }
            $conn->close();
}
function updateName($idx,$x){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="alumnims";

    try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE users SET fname='$x' WHERE ID='$idx'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
function updateUserName($idx,$x){
    $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="alumnims";

    try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE users SET username='$x' WHERE ID='$idx'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
function updateEmail($idx,$x){
    $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="alumnims";

    try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE users SET email='$x' WHERE ID='$idx'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
function updatePhone($idx,$x){
    $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="alumnims";

    try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE users SET phone='$x' WHERE id='$idx'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}
function updatepassword($idx,$x){
    $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="alumnims";

    try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE users SET password='$x' WHERE id='$idx'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
}
function delete($idx){
    $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="alumnims";
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // sql to delete a record
            $sql = "DELETE FROM users WHERE  ID='$idx'";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Record deleted successfully";
            
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
$conn = null;
}
function allUsers(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "alumnims";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, fname,username,phone,email,gender,dob,userType From users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo"<tr>";
  echo "<td>ID:</td><td>Full Name:</td><td>User name:</td><td>Phone Number:</td><td>Email:</td><td>Gender:</td><td>Date of birth:</td><td>User Type:</td>";
  echo"</tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo"<tr>";
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["fname"]."</td>";
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["phone"]."</td>";
    echo "<td>".$row["email"]."</td>";
    echo "<td>".$row["gender"]."</td>";
    echo "<td>".$row["dob"]."</td>";
    echo "<td>".$row["userType"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "ID not found";
}
$conn->close();
}
