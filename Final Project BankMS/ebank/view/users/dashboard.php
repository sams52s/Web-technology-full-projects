<?php
//session_start();
if(isset($_SESSION["username"]))
{
    echo"<p class='boldline'>Dashboard: </p><hr>";
    echo "<p class='boldline'><a href='../customer/index.php'>Home Page</a></p>";
    echo "<p class='boldline'><a href='../customer/CreateAccount.php'>Create Account</a></p>";
    echo "<p class='boldline'><a href='../customer/transaction.php'>Transaction Account</a></p>";
    echo "<p class='boldline'><a href='../users/viewProfile.php'>View Profile</a></p>";
    echo "<p class='boldline'><a href='../users/editProfile.php'>Edit Profile</a></p>";
    echo "<p class='boldline'><a href='../users/Profilepic.php'>Edit Profile picture</a></p>";
    echo "<p class='boldline'><a href='../users/editPassword.php'>Edit Password</a></p>";
    echo "<p class='boldline'><a href='../users/deleteProfile.php'>Delete Profile</a></p>";
    echo "<p class='boldline'><a href='../users/logout.php'>Log Out</a></p>";

}
else{
    header("Refresh: 0; url=../users/login.php");
}
