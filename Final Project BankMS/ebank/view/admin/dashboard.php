<?php
if(isset($_SESSION["username"]))
{
    echo "<p class='boldline'>Dashboard</p>";
    echo "<p class='boldline'><a href='search.php'>search</a></p>";
    echo "<p class='boldline'><a href='addadmin.php'>Add admin</a></p>";
    echo "<p class='boldline'><a href='customer.php'>Customer</a></p>";
    echo "<p class='boldline'><a href='employee.php'> Employee</a></p>";
    echo "<p class='boldline'><a href='branch.php'>Branch</a></p>";
    echo "<p class='boldline'><a href='cv.php'>View CV</a></p>";
}
else{
    header("Refresh: 0; url=../users/login.php");
}
?>