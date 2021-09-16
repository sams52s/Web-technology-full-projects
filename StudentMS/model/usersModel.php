<?php
function create($fname,$uname,$email,$phoneNumber,$gender,$password,$dob,$area,$city,$userType){
        $address=2;
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="studentms";
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
                $sql = "select ID from users where email =? Limit 1"; 
                $INSERTadderss="INSERT INTO address (Country,Divisions,zipcode)VALUES (?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param('s',$email);
                $stmt->execute();
                $stmt->bind_result($uID);
                $stmt->store_result();
                $rnum=$stmt->num_rows;
                    $stmt->close();
                    $stmt = $conn->prepare($INSERTadderss);
                    $stmt->bind_param("sss",$Country,$area,$city);
                    $stmt->execute();
                    echo"<br> Registration Done <br>";
                    header("Refresh: 3; url=../view/users/login.php");
            }
            else{
                echo"Already an account registard by this mail. New mail id requiared";
                header("Refresh: 3; url=../view/users/registration.html");
            }
            $stmt->close();
            $conn->close();
        }
}
function login($ID,$password){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="studentms";
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
                if($_SESSION["userType"]=="Customer")
                {
                    header("Refresh: 0; url=../view/users/viewProfile.php");
                }
            }
        }
            $conn->close();
}
function updateName($idx,$x){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="studentms";

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
        $dbname="studentms";

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
        $dbname="studentms";

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
        $dbname="studentms";

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
        $dbname="studentms";

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
        $dbname="studentms";
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // sql to delete a record
            $sql = "DELETE FROM users WHERE  id='$idx'";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Record deleted successfully";
            
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
$conn = null;
}