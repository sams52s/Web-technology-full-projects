
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
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
            <form action="../../controller/workController.php" method="post">
            Work Name:
            <input type="text" name="Name" id="Name"> <br>
            Due Date Name:
            <input type="date" name="duedate" id=""> <br>
            Work For:
            <input type="text" name="workerID" id=""><br>
            <input type="submit" value="submit">
        </form>
        </div>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>