<?php
if(isset($_SESSION["username"]))
{
    echo "<p class='boldline'>Dashboard</p>";
    echo "<p class='boldline'><a href='index.php'>Home</a></p>";
    echo "<p class='boldline'><a href='search.php'>search</a></p>";
    echo "<p class='boldline'><a href='addadmin.php'>Add admin</a></p>";
    echo "<p class='boldline'><a href='allpost.php'>Show All Post</a></p>";
    echo "<p class='boldline'><a href='allusers.php'>Show All Users</a></p>";
    
}
else{
    header("Refresh: 0; url=../users/login.php");
}
?>