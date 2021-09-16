<?php
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

$sql = "SELECT ID, userid,type,balance,date,branchID From account Where userid='$uid' ";
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
?>