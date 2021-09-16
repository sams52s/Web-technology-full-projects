<?php require '../model/welcome.php' ?>

<?php
    $dtls = file_get_contents('data.json');
    $dtlsok = json_decode($dtls);

    foreach($dtlsok as $value)
    {
       
        echo "<h2>Name: $value->name</h2>";
        echo "<h2>Email: $value->email</h2>";
        echo "<h2>Contact Number: $value->number</h2>";
        
    }
?>

<?php require '../model/footer.php' ?>
 