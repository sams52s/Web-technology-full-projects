<?php
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

$sql = "SELECT ID, fname,username,phone,email,gender,dob,userType From users Where ID='$uid' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>ID:</td><td>".$row["ID"]."</td></tr>";
    echo "<tr><td>Full Name:</td><td>".$row["fname"]."</td></tr>";
    echo "<tr><td>User name:</td><td>".$row["username"]."</td></tr>";
    echo "<tr><td>Phone Number:</td><td>".$row["phone"]."</td></tr>";
    echo "<tr><td>Email:</td><td>".$row["email"]."</td></tr>";
    echo "<tr><td>Gender:</td><td>".$row["gender"]."</td></tr>";
    echo "<tr><td>Date of birth:</td><td>".$row["dob"]."</td></tr>";
    echo "<tr><td>User Type:</td><td>".$row["userType"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "ID not found";
}
$conn->close();
?>