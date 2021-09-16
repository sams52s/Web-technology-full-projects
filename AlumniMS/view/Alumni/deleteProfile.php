
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
        <div class="dashboardS">
            <?php 
                require_once('../users/dashboard.php');
            ?>
        </div>
        <div class="MainBody">
            <fieldset>
                <legend><p class="boldline">Delete Profile</p></legend>
                    <div class="right">
                        <form method="post" action="../../controller/updateProfile.php">
                                <div class="newpassword">
                                    <div class="newPassword">
                                        password: <input type="password" name="dp">
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
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>