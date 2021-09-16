<?php
//session_start();
if(isset($_SESSION["username"]))
{
    echo"<p class='boldline'>Dashboard: </p><hr>";
    echo "<p class='boldline'><a href='viewProfile.php'>View Profile</a></p>";
    echo "<p class='boldline'><a href='editProfile.php'>Edit Profile</a></p>";
    echo "<p class='boldline'><a href='Profilepic.php'>Edit Profile picture</a></p>";
    echo "<p class='boldline'><a href='editPassword.php'>Edit Password</a></p>";
    echo "<p class='boldline'><a href='deleteProfile.php'>Delete Profile</a></p>";
    echo "<p class='boldline'><a href='addpost.php'>Give post</a></p>";
    echo "<p class='boldline'><a href='postFeed.php'>Post Feed</a></p>";
    echo "<p class='boldline'><a href='mypost.php'>My Feed</a></p>";
    echo "<p class='boldline'><a href='logout.php'>Log Out</a></p>";

}
else{
    header("Refresh: 0; url=../users/login.php");
}
