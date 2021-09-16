
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
            <p class="boldline">Transactions</p>
            <div class="editdtls">
                <table>
                    <tr>
                        <td>
                <button onclick="add()" id="add" class="btn" type="button">Add Money</button></td>
                <td>
                <div class="edtname" id="addf">
                    <form action="../../controller/updateAccount.php" method="post">
                        <input type="text" name="acid" placeholder="Enter Your Account Number">
                        <input type="text" name="add" placeholder="Enter Your Amount">
                        <input  class="btn" type="submit" value="Submit">
                    </form>
                </div>
                </td>
                </tr>
                <tr>
                    <td>
                <button onclick="withdraw()" id="withdraw" class="btn" type="button">With Draw Money</button></td><td>
                <div class="withdraw" id="withdrawf">
                    <p></p>
                    <form action="../../controller/updateAccount.php" method="post">
                        <input type="text" name="acid" placeholder="Enter Your Account Number">
                        <input type="text"  name="withdraw" placeholder="Enter Your Amount">
                        <input class="btn" type="submit" value="Submit">
                    </form>
                </div>
                </td>
                </tr>
                <tr>
                    <td>
                <button onclick="sent()" id="sent" class="btn" type="button">Sent Money</button></td><td>
                <div class="sent" id="sentf">
                    <p></p>
                    <form action="../../controller/updateAccount.php" method="post">
                        <input type="text" name="acid" placeholder="Enter Your Account Number">
                        <input type="text" name="Racid" placeholder="Enter Your Receiver Account Number">
                        <input type="text"  name="sent" placeholder="Enter Your Amount">
                        <input id="NameBtn" class="btn" type="submit" value="Submit">
                    </form>
                </div>
                </td>
                </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<?php require_once('../../controller/Extra/footer.php')?>
<script>
    document.getElementById("addf").hidden = true;
    document.getElementById("withdrawf").hidden = true;
    document.getElementById("sentf").hidden = true;
    function add() {
        document.getElementById("addf").hidden = false;
        document.getElementById("withdrawf").hidden = true;
    document.getElementById("sentf").hidden = true;
    }
    function withdraw() {
        document.getElementById("withdrawf").hidden = false;
        document.getElementById("addf").hidden = true;
        document.getElementById("sentf").hidden = true;
    }
    function sent() {
        document.getElementById("sentf").hidden = false;
        document.getElementById("addf").hidden = true;
    document.getElementById("withdrawf").hidden = true;
    }
</script>