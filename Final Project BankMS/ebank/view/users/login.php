<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="../../controller/Extra/style.css">
    <?php require_once('../../controller/Extra/header.php')?>
</head>
<body>
    <h1 style="margin-top: -.5px;">Log in</h1>
    <hr>
    <form action="../../controller/loginController.php" method="POST">
    <center>
    <p class="boldline">User ID:</p>
    <input type="text" name="id" id="id"> <span id="idspan"></span>
    <p class="boldline">Password:</p>
    <input type="password" name="password" id="password"><span id="passwordspan"></span> <br>
    <button type="submit" class="btn" >Login</button>
    <hr>
    </center>
</form>
<p class="boldline"><a href="../../index.html">Go Back</a></p>
</body>
<?php require_once('../../controller/Extra/footer.php')?>
</html>