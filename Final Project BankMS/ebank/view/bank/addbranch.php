
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Branch</title>
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
            <p class="boldline">Create Your Bank Account</p>
            <center>
                <form action="../../controller/addbranch.php" method="post">
                <fieldset>
                    <legend>Branch type:</legend>
                    <input type="radio" name="employees"  value="0">New <br>
                </fieldset>
                <fieldset>
                    <legend>Branch Vacancy:</legend>
                    <input type="text" name="vacancy" id="vacancy">vacancy <br>
                </fieldset>
                <span></span> <br>
                <labal >Branch Area:  </labal> 
                <select id="">
                    <option name="addressid: "   value="2">Dhaka</option>
                    <option name="addressid: "  value="1">Rajshahi</option>
                    <option name="addressid: "  value="3">Khulna</option>
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