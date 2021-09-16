<?php
//session_start();
if(isset($_SESSION["username"]))
{
    echo"<p class='boldline'>Dashboard: </p><hr>";
    echo "<p class='boldline'><a href='index.php'>Home Page</a></p>";
    echo "<p class='boldline'><a href='./creatework.php'>Add Work</a></p>";
    echo "<p class='boldline'><a href='./search.php'>Search Work</a></p>";
    echo "<p class='boldline'><a href='./salary.php'>Show salary</a></p>";
    echo "<p class='boldline'><a href='./transaction.php'>Transaction</a></p>";
    echo "<p class='boldline'><a href='./ShowSedule.php'>show Work</a></p>";
    echo "<p class='boldline'><a href='./Mywork.php'>My Work</a></p>";
    echo "<p class='boldline'><a href='editProfile.php'>Edit Profile</a></p>";
    echo "<p class='boldline'><a href='Profilepic.php'>Edit Profile picture</a></p>";
    echo "<p class='boldline'><a href='editPassword.php'>Edit Password</a></p>";
    echo "<p class='boldline'><a href='deleteProfile.php'>Delete Profile</a></p>";
    echo "<p class='boldline'><a href='../users/logout.php'>Log Out</a></p>";

}
else{
    header("Refresh: 0; url=../users/login.php");
}
