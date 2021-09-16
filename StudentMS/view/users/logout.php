
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
        <link rel="stylesheet" href="../../controller/Extra/style.css">
    <?php require_once('../../controller/Extra/header.php')?>
    <style>
    .welcome {

        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans';
        font-size: 25px;
        color: darkred;
        
        
    }

    .btn {
        padding: 5rem;
        text-align: center;
    }

    .btn button {
        background-color: #CC0000;
        padding: 1rem;
        font-size: 25px;
        color: azure;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .btn button:hover {
        background-color: #000033;
        color: #CCFFFF;
    }

    .btn a {
        color: #CCFFFF;
    }
    </style>
</head>
<body>
    <div class="dashvsMain">
        <div class="dashboard">
            <?php 
                $user="User";
                require_once('../users/dashboard.php');
            ?>
        </div>
        <div class="MainBody">
            <div class="welcome">
                <?php  
                        if(isset($_SESSION["username"]))
                        {
                            $user=$_SESSION["username"];
                            echo $user." Do you want to logged out.";

                        }//"using session from registration.php
                        else{
                            echo " You have logged out. please login again";
                        }
                    ?>
                <div class="btn">
                    <button>
                        <?php
                        session_destroy();
                        echo"<a href='logout.php'>Log Out</a>" 

                        ?>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>