<?php 
function showAlluser(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bankms";

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
function showAllCustomer(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bankms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, fname,username,phone,email,gender,dob,userType From users  Where userType='Customer' ";
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
function showAllAccount(){
    $uid=$_SESSION["ID"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bankms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, userid,type,balance,date,branchID From account";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    // output data of each row
    echo "<tr><td>Account ID:</td><td>User ID: </td><td>Account type:</td><td>Balance</td><td>Account creating Date:</td><td>Account in blanc number:</td></tr><tr>";
  while($row = $result->fetch_assoc()) {
    
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["userid"]."</td>";
    echo "<td>".$row["type"]."</td>";
    echo "<td>".$row["balance"]."</td>";
    echo "<td>".$row["date"]."</td>";
    echo "<td>".$row["branchID"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "ID not found";
}
$conn->close();
}

function showAllEmployee(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bankms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, fname,username,phone,email,gender,dob,userType From users  Where userType='Employee' ";
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
function showAllbranch(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bankms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, fname,username,phone,email,gender,dob,userType From users  Where userType='Customer' ";
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

