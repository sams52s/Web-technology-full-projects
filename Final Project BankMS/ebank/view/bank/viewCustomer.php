<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Account</title>
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
            <?php include('../../controller/adminController.php') ;?>
            <p class="boldline">All Customer</p>
            <?php
                showAllCustomer();
            ?>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>