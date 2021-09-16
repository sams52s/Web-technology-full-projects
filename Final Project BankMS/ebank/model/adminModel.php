<?php 
function create($addressid,$vacancy,$employees){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="bankms";
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
            $INSERT = "INSERT INTO branch (addressid,vacancy,employees)VALUES (?,?,?)";
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sss",$addressid,$vacancy,$employees);
                $stmt->execute();
                echo"<br> Done <br>";
                header("Refresh: 3; url=../view/bank/index.php");
            $stmt->close();
            $conn->close();
        }
}
function delete($idx){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="bankms";
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // sql to delete a record
            $sql = "DELETE FROM branch WHERE  ID='$idx'";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Record deleted successfully";
            
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
$conn = null;
}