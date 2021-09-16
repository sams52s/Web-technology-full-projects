
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>schedule</title>
    <link rel="stylesheet" href="../../controller/Extra/style.css">
        <?php require_once('../../controller/Extra/header.php')?>
</head>
<body>
    <div class="dashvsMain">
        <div class="dashboard">
            <?php 
                require_once('dashboard.php');
            ?>
        </div>
        <div class="MainBody">
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

$sql = "SELECT * From schedule ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    // output data of each row
    echo "<tr><td> ID:</td><td>Name: </td><td>Statuse :</td><td>Assigne Date</td><td>Due Date:</td></tr><tr>";
  while($row = $result->fetch_assoc()) {
    
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["Name"]."</td>";
    echo "<td>".$row["Statuse"]."</td>";
    echo "<td>".$row["aDate"]."</td>";
    echo "<td>".$row["duedate"]."</td>";
    echo "<td>".$row["workerID"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "ID not found";
}
$conn->close();
?>
        </div>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>