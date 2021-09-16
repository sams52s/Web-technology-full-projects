
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Feed</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
            <p class="boldline">My Posts</p>
          <?php include('../../controller/adminController.php') ;
          showpost($_SESSION["ID"]);
          ?>
          <div class="editpost">
              <p class="boldline">Edit Post :</p>
                <form action="../../controller/updatePost.php" method="post">
                    Post Number: <input type="text" name="pid" id=""> <br>
                    <br>Post: <br>
                    <textarea name="post" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                <span></span> <br>
                <button type="submit" class=" btn-outline-success">Post</button>
            </form>
          </div>
        </div>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>