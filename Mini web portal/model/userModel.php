<?php 
    
    function reg($id,$name,$password,$email,$usertype)
    {
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="minproject";
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
            $SELECT= "SELECT name From users Where name=? Limit 1"; 
            $INSERT ="INSERT Into users (id,name,password,email,usertype)values(?,?,?,?,?)";
            //prepare statement
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param('s',$name);
            $stmt->execute();
            $stmt->bind_result($name);
            $stmt->store_result();
            $rnum=$stmt->num_rows;
            if($rnum==0)
            {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sssss",$id,$name,$password,$email,$usertype);
                $stmt->execute();
                echo"Registration Done";
                echo"";
            }
            else{
                echo"Already an account registard by this mail. New mail id requiared";
            }
            $stmt->close();
            $conn->close();
        }
    }
    function login($id,$password)
    {
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="minproject";
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
            $sql="select * from users where id='".$id."' AND password='".$password."' limit 1";
            $result=$conn->query($sql);
            if(mysqli_num_rows($result)==1)
            {
                echo "Login Succesfull.";
                header("refresh: 2; url = ../view/home.php");
                exit();
            }
            else{
                echo"Wrong password";
            }
            $conn->close();
        }
    }
    function homemodel($id){
        $host="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbname="minproject";
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
            $sql="select name,usertype from users where id='".$id."' limit 1";
            $result=$conn->query($sql);
            if(mysqli_num_rows($result)==1)
            {
                while($row = $result->fetch_assoc())
                {
                    $_SESSION["usertype"]=$row["usertype"];
                    return $row["name"];
                }
                
                exit();
            }
            else{
                echo"Wrong password";
            }
            $conn->close();
        }
        
    }
?>