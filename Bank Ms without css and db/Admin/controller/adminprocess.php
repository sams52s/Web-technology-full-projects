<?php 
    $conn = mysqli_connect('localhost','root','','studybuddy');
    if(isset($_POST['save']))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $institution = $_POST["institution"];
        $sql = "SELECT * FROM users WHERE username ='$username'";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);
        $sql = "SELECT * FROM users WHERE email ='$email'";
        $result = mysqli_query($conn,$sql);
        $count1 = mysqli_num_rows($result);
    if($count == 1 || $count1 == 1){
        echo "Username or Email is already registered!";
        echo "Try again!";
        header("refresh: 2; url = admin.php");
    }
    else{
        $sql = "INSERT INTO users(username,password,firstname,lastname,email,institution) VALUES('$username','$password','$firstname','$lastname','$email','$institution')";
        if(mysqli_query($conn,$sql)){
            echo"Registration Success";
            header("refresh: 2; url = admin.php");
        }
    }
    }
    if(isset($_POST['edit']))
    {
        $username = $_POST["username"];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $institution = $_POST["institution"];
        $result = mysqli_query($conn, "SELECT * from users WHERE id='" . $_POST['id'] . "' AND password='" . $_POST['password'] . "'");
        $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
        if($count == 1 ){
        if($username!='')
        {
            $sql = "UPDATE users set username='" . $_POST['username'] . "' WHERE id='" . $_POST['id']. "'";
            if(mysqli_query($conn,$sql)){
            echo"username Edited Successfully <br>";
            header("refresh: 2; url = admin.php");
            }
        }
        if($firstname!='')
        {
            $sql = "UPDATE users set firstname='" . $_POST['firstname'] . "' WHERE id='" . $_POST['id']. "'";
            if(mysqli_query($conn,$sql)){
            echo"firstname Edited Successfully <br>";
            header("refresh: 2; url = admin.php");
            }
        }
        if($lastname!='')
        {
            $sql = "UPDATE users set lastname='" . $_POST['lastname'] . "' WHERE id='" . $_POST['id']. "'";
            if(mysqli_query($conn,$sql)){
            echo"lastname Edited Successfully <br>";
            header("refresh: 2; url = admin.php");
            }
        }
        if($email!='')
        {
            $sql = "UPDATE users set email='" . $_POST['email'] . "' WHERE id='" . $_POST['id']. "'";
            if(mysqli_query($conn,$sql)){
            echo"email Edited Successfully <br>";
            header("refresh: 2; url = admin.php");
            }
        }
        if($institution!='')
        {
            $sql = "UPDATE users set institution='" . $_POST['institution'] . "' WHERE id='" . $_POST['id']. "'";
            if(mysqli_query($conn,$sql)){
            echo"institution Edited Successfully <br>";
            header("refresh: 2; url = admin.php");
            }
        }
        echo"<br>Edit Success<br>";
    }
    else{
        echo " User ID  password didn't match!";
        echo "Try again!";
        header("refresh: 2; url = admin.php");
        }
    }
        if(isset($_POST['delete']))
    {
        $result = mysqli_query($conn, "SELECT * from users WHERE id='" . $_POST['id'] . "' AND password='" . $_POST['password'] . "'");
            $row = mysqli_fetch_array($result);
        $count = mysqli_num_rows($result);
        if($count == 1 ){
            $sql = "DELETE FROM users WHERE id='" . $_POST['id'] . "'";
            if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            header("refresh: 2; url = admin.php");
            }
             else {
            echo "Error deleting record: " . $conn->error;
            header("refresh: 2; url = admin.php");
            }
        }
    }

        
?>