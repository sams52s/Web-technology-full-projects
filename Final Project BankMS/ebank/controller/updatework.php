<?php 
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["Statuse"])&&$_POST["ID"])
    {
        $s=$_POST["Statuse"];
        $ID=$_POST["ID"];
    $host="localhost";
    $dbUsername = "root";
    $dbPassword="";
    $dbname="bankms";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE schedule SET Statuse='$s' WHERE ID='$ID'";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";} catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
    }
    
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}