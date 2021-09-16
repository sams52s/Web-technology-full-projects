<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
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
            <p class="boldline">G4 Bank</p>
            <center>
                <a href="../../index.html" class="btn"> EXIT</a>
            </center>
            
        </div>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>