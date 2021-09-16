<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View CV</title>
    <link rel="stylesheet" href="../../controller/Extra/style.css">
        <?php require_once('../../controller/Extra/header.php')?>
</head>
<body>
    <div class="dashvsMain">
        <div class="dashboard">
            <?php 
                require_once('../admin/dashboard.php');
            ?>
        </div>
        <div class="MainBody">
            <p class="boldline">Admin View</p>
            <div class="profiledtls">
            <?php include('../../controller/adminController.php') ;?>
            <p class="boldline">Show CV</p>
                    <ul><li>
                            <a href="CVIrina.html">Show CV</a></td>
                    </li>
                    <li><a href="CVShaafin.html">Show CV</a></li>
                </ul>
                <br>
            </div>
            
        </div>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>