<?php
function create($uid,$username,$post){
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
            $INSERT = "INSERT INTO post (uid,username,post)VALUES (?,?,?)";
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sss",$uid,$username,$post);
                $stmt->execute();
                echo"<br> Account Created Done <br>";
            $stmt->close();
            $conn->close();
        }
}
function update($id,$post){
    $host="localhost";
    $dbUsername = "root";
    $dbPassword="";
    $dbname="alumnims";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE post SET post='$post' WHERE ID='$id'";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";} catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
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
            $sql = "DELETE FROM post WHERE  ID='$idx'";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Record deleted successfully";
            
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
$conn = null;
}