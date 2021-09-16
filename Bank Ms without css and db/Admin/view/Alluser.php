<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All User</title>
</head>
<body>
    <?php
        $myfile = fopen("../controller/reginfo.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("../controller/reginfo.txt"));
        fclose($myfile);
        ?>
<div class="dashboard">
    <br>
    <hr>
        <a href="./home.php">Home</a> <br>
        <a href="./viewProfile.php">View Profile</a> <br>
        <a href="./EditProfile.php">Edit Profile</a><br>
        <a href="./up.php">Upload file</a><br>
        <a href="./ChangePassword.php">Change Password</a><br>
        <a href="../controller/logout.php">logout</a><br>
        <a href="./Alluser.php">All user</a>
    </div>
</body>
</html>