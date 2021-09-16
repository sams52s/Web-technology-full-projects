<?php 
function create($userid,$type,$balance,$date,$branchID){
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
            $INSERT = "INSERT INTO account (userid,type,balance,date,branchID)VALUES (?,?,?,?,?)";
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssss",$userid,$type,$balance,$date,$branchID);
                $stmt->execute();
                echo"<br> Account Created Done <br>";
                //header("Refresh: 3; url=../view/customer/index.php");
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
            $sql = "DELETE FROM account WHERE  ID='$idx'";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Record deleted successfully";
            
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
$conn = null;
}
function addmoney($x,$idx){
    $blnc=balance($idx);
    $ammount=($blnc+$x);
    $host="localhost";
    $dbUsername = "root";
    $dbPassword="";
    $dbname="bankms";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE account SET balance='$ammount' WHERE ID='$idx'";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";} catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

}
function balance($idx){
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
            $ID = mysqli_real_escape_string($conn, stripcslashes($idx));  
            $SELECT= "SELECT * From account Where ID='$ID'"; 
            $result = mysqli_query($conn, $SELECT);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result); 
            if($count==0)
            {
                echo" Account not found".'<br>'."Wrong password";
                header("Refresh: 3; url=../view/users/login.php");
            }
            else{
                $balance=$row["balance"];
                return $balance;

            }
        }
            $conn->close();
}
function Withdrowmoney($x,$idx){
    $blnc=balance($idx);
    if($blnc>$x){
        $ammount=($blnc-$x);
    $host="localhost";
    $dbUsername = "root";
    $dbPassword="";
    $dbname="bankms";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE account SET balance='$ammount' WHERE ID='$idx'";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";} catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
else{
    echo "Not enough Money";
}
}

function sentmoney($x,$idx,$y){
    /*$host="localhost";
    $dbUsername = "root";
    $dbPassword="";
    $dbname="bankms";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE users SET phone='$x' WHERE id='$idx'";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();

        // echo a message to say the UPDATE succeeded
        echo $stmt->rowCount() . " records UPDATED successfully";} catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }*/
}