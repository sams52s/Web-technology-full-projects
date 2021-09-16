<?php 
function create($Name,$Statuse,$aDate,$duedate,$workerID){
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
            $INSERT = "INSERT INTO schedule (Name,Statuse,aDate,duedate,workerID)VALUES (?,?,?,?,?)";
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssss",$Name,$Statuse,$aDate,$duedate,$workerID);
                $stmt->execute();
                echo"<br> Account Created Done <br>";
                header("Refresh: 3; url=../view/employee/index.php");
            $stmt->close();
            $conn->close();
        }
}