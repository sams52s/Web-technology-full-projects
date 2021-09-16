<?php
function showAlltransaction()
{
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

    $sql = "SELECT * From transaction ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        // output data of each row
        echo "<tr><td>transaction ID:</td><td>User ID: </td><td>Account ID:</td><td>transaction type:</td><td>Balance</td><td>Account in Branch number:</td></tr>";
        echo"<tr>";
        while($row = $result->fetch_assoc()) {
        
        echo "<td>".$row["ID"]."</td>";
        echo "<td>".$row["userid"]."</td>";
        echo "<td>".$row["accountid"]."</td>";
        echo "<td>".$row["transactiontype"]."</td>";
        echo "<td>".$row["amount"]."</td>";
        echo "<td>".$row["Branchid"]."</td></tr>";
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

    $sql = "SELECT * From branch ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        // output data of each row
        echo "<tr><td>branch ID:</td><td>Address ID</td><td>Vacancy </td><td>Worker number</td><tr>";
    while($row = $result->fetch_assoc()) {
        
        echo "<td>".$row["ID"]."</td>";
        echo "<td>".$row["addressid"]."</td>";
        echo "<td>".$row["vacancy"]."</td>";
        echo "<td>".$row["employees"]."</td></tr>";
    }
    echo "</table>";
    } else {
    echo "ID not found";
    }
    $conn->close();}