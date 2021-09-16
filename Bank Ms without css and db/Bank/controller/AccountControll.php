<?php 

$balance=$Credit=$Debit=$transfer=$balanceErr=$data='';
if(isset($_POST['Credit'])){
    $Credit=$_POST['Credit'];
    if($balance<=0){
        $balanceErr="Insufficient balance\n please Debit.";
    }
    else{
        $balance=$balance-$Credit;
    
    }
    header('location: ../view/Account.php');
    
}
if(isset($_POST['Debit'])){
    $Debit=$_POST['Debit'];
    $balance=$balance+$Debit;
    header('location: ../view/Account.php');
}
if(isset($_POST['transfer'])){
    $transfer=$_POST['transfer'];
    
    if($balance<=0){
        $balanceErr="Insufficient balance\n please Debit.";
    }
    else{
        $balance=$balance-$transfer;
    
    }
    header('location: ../view/Account.php');
}
$Account = fopen("Account.txt", "a") or die("Unable to open file!");
$txt =$balance. "|". $Credit ."|".$Debit."|".$transfer."\n";
fwrite($Account, $txt);
fclose($Account);

//$Accountr = fopen("Account.txt", "r");// or die("Unable to open file!");
//$data=fread($Accountr,filesize('Account.txt'));
//$data=fgets($Account);
$file = fopen("Account.txt","r");
//while(! feof($file))
  //{
  $data= fgets($file). "<br />";
  //}
fclose($file);
$tk=explode('|',$data);
?>