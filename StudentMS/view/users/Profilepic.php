
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
           <div class="right">
            <form action="page2/part2.php" method="post" enctype="multipart/form-data">
                <!--after clicking submit btn this page will be loaded..-->

                <fieldset>
                    <legend><B>PROFILE PICTURE</B></legend> <br>
                    <!--fieldset is just to make a separate sectin and legend for naming this fieldset. div is for separate that img for editing..-->
                    <div class="upPic">
                        <img src="page2/upPic.jpg"><br><br>
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                    <br>
                    <hr>
                    <input type="submit" name="submit">
                </fieldset>
            </form>

        </div>
        </div>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>