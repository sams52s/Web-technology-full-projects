<?php
	session_start();
	if(isset($_SESSION['flag'])){
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <h1>Your Account! <?=$_SESSION['user']['username']?></h1>

    <center>
        <table>
            <tr>
                <td></td>
            </tr>
            <tr>
                <form action="../controller/AccountControll.php" method="POST">
                <td>Credit:</td>
                <td><input type="text" name="Credit"></td>
                <td><button type="submit" value="Credit">Credit</button></td>
            </form>
                
            </tr>
            <tr>
                <form action="../controller/AccountControll.php" method="POST">
                <td>Debit:</td>
                <td><input type="text" name="Debit" ></td>
                <td><button type="submit" value="Debit">Debit</button></td>
                
            </form>
                
            </tr>
            <tr>
                <form action="../controller/AccountControll.php" method="POST">
                <td>transfer:</td>
                <td><input type="text" name="transfer" ></td>
                <td><button type="submit" value="transfer">transfer</button></td>
            </form>
                
            </tr>
        </table>
         <?php
        require_once('../controller/AccountControll.php'); 
        echo $balanceErr;
     ?>
    </center>
    <h2>History-</h2><?php echo $data?>

    <div class="history">
        Balance: <?php echo $balance=$tk[0]?>
        <br>  Credit: <?php echo  $Credit=$tk[1]?>
        <br> Debit: <?php echo $Debit=$tk[2]?>
        <br> transfer: <?php echo $transfer=$tk[3]?>
        
    </div>
    
</body>
</html>
<?php 
	
	}else{
		header('location: login.php');
	}
?>