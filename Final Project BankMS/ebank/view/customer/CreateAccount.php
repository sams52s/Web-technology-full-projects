
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
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
            <p class="boldline">Create Your Bank Account</p>
            <center>
                <form action="../../controller/accountController.php" method="post">
                <fieldset>
                    <legend>Account type:</legend>
                    <input type="radio" name="atype"  value="Saving">Saving Account <br>
                    <input type="radio" name="atype"  value="Fixed">Fixed Account <br>
                    <input type="radio" name="atype"  value="Salary">Salary Account <br>
                </fieldset>
                <span></span> <br>
                <labal >Branch Name:  </labal> 
                <select name="branchID" id="">
                    <option value="1">Dhaka</option>
                    <option value="2">Rajshahi</option>
                    <option value="3">Gazipur</option>
                </select> <br>
                <span></span> <br>
                <button type="submit" class="btn">Submit</button>
            </form>
            </center>
        </div>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>