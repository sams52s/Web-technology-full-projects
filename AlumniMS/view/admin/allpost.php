
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Feed</title>
    <link rel="stylesheet" href="../../controller/Extra/style.css">
        <?php require_once('../../controller/Extra/header.php')?>
</head>
<body>
    <div class="dashvsMain">
        <div class="dashboardS">
            <?php 
                require_once('dashboard.php');
            ?>
        </div>
        <div class="MainBody">
            <p class="boldline">All Posts</p>
          <?php include('../../controller/adminController.php') ;
          showAllpost();
          ?>
          </div>
          </div>
             <fieldset>
                <legend><p class="boldline">Delete Post</p></legend>
                    <div class="right">
                        <form method="post" action="../../controller/deletepost.php">
                                <div class="newpassword">
                                    <div class="newPassword">
                                        Post ID: <input type="text" name="cid" id="cid">
                                        password: <input type="password" name="adp">
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