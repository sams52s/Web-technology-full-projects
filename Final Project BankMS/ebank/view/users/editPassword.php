
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
                require_once('../users/dashboard.php');
            ?>
        </div>
        <div class="MainBody">
            <div class="cp">
                <fieldset>
                    <div class="right">
                        <form method="post" action="../../controller/updateProfile.php">
                                <div class="newpassword">
                                    <h1>Change Password.</h1>
                                    <div class="newPassword">
                                        Current password: <input type="password" name="currentPassword">
                                        <br><br>
                                        <span style="color:Green">New password: </span> <input type="password" name="password">
                                        <br><br>
                                        <span style="color:red">Retype password: </span> <input type="password"name="repassword">
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