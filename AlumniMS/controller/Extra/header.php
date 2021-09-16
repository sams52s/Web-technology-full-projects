<!DOCTYPE html>
<html lang="en">
<style>
    .hder{
    display: grid;
    text-align: center;
    margin-top: -10px;
    border: 2px solid goldenrod;
    background-color: rgb(54, 51, 51);
    color: azure;
    grid-template-columns: 100px 1fr ;
    grid-template-rows: auto;
    }
    .hleft{
        border: .5rem solid ;
    }
    .hright{
        margin-top: 1rem;
        padding: 5px;
        text-align: right;
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .logh{
        color: whitesmoke;
        font-size: 20px;
        border: .4rem solid ;
        padding: 12px;
    }
</style>
<body>
        <div class="hder">
        <div class="hleft">
            <h4>ALUMNI AIUB</h4>
        </div>
        <div class="hright" >
            <?php
            session_start();
            $login="login";
            $name="";
            if(isset($_SESSION["username"])){
                $name=$_SESSION["username"];
                $login="<a class='logh' href='../../view/users/logout.php'>logout</a>"; 
                echo"| $name  |  ";
                echo $login;
            }
            else{echo"| $name  |  ";
                echo $login;}
            ?>
        </div>
    </div>

</body>
</html>