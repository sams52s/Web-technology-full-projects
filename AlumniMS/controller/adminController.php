<?php 
function showAll(){
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
function showAllstudent(){
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

$sql = "SELECT ID, fname,username,phone,email,gender,dob,userType From users  Where userType='Student' ";
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
function showAllpost(){
    $uid=$_SESSION["ID"];
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

$sql = "SELECT ID, uid,username,post From post";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    // output data of each row
    echo "<tr><td>Post Number:</td><td>User ID: </td><td>user name:</td><td>post:</td></tr><tr>";
  while($row = $result->fetch_assoc()) {
    
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["uid"]."</td>";
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["post"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "Post not found";
}
$conn->close();
}
function showAllAlumni(){
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

$sql = "SELECT ID, fname,username,phone,email,gender,dob,userType From users  Where userType='Alumni' ";
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
function showpost($id){
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

$sql = "SELECT ID, uid,username,post From post Where uid='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    // output data of each row
    echo "<tr><td>Post Number:</td><td>User ID: </td><td>user name:</td><td>post:</td></tr><tr>";
  while($row = $result->fetch_assoc()) {
    
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["uid"]."</td>";
    echo "<td>".$row["username"]."</td>";
    echo "<td>".$row["post"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "Post not found";
}
$conn->close();
}

