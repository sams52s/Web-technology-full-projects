<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branch</title>
    <link rel="stylesheet" href="../../controller/Extra/style.css">
        <?php require_once('../../controller/Extra/header.php')?>
</head>
<body>
    <div class="dashvsMain">
        <div class="dashboard">
            <?php 
                require_once('dashboard.php');
            ?>
        </div>
        <div class="MainBody">
            <p class="boldline">Bank View</p>
            <div class="profiledtls">
            <?php include('../../controller/branchController.php') ;?>
            <p class="boldline">All branch</p>
            <?php
                showAllbranch();
            ?>
            <fieldset>
                <legend><p class="boldline">Delete Branch</p></legend>
                    <div class="right">
                        <form method="post" action="../../controller/deletebranch.php">
                                <div class="newpassword">
                                    <div class="newPassword">
                                        Branch ID: <input type="text" name="cid" id="cid">
                                       
                                        <br><br>
                                    </div>
                                    <hr>
                                    <input type="submit" name="submit" value="Submit">
                                </div>
                        </form>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>