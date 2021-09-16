<?php 
$flag=0;
$fname = $uname =$email=$phoneNumber= $gender =  $password= $cpassword=  $dob= $area= $city= $userType=$country="";
$fnameerr = $unameerr =$emailerr=$phoneNumbererr= $gendererr =  $passworderr= $cpassworderr=  $doberr= $areaerr= $cityerr="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST["fname"]!=""){
        $fname = test_input($_POST["fname"]);
    }
    else{
        $flag=1;
        $fnameerr="Full name required";
    }
    if($_POST["uname"]!=""){
        $uname = test_input($_POST["uname"]);
    }
    else{
        $flag=1;
        $unameerr="User name required";
    }
    if($_POST["email"]!=""){
        $email = test_input($_POST["email"]);
        /*$ne=strlen($email);
        for($i=0;$i<=$ne;$i++)
        {
            while($email[$ne]==".")
            {
                $email = test_input($_POST["email"]);
                $flag=0;
            }
            $flag=1;
            $emailerr="Valid email required";
        }*/

    }
    else{
        $flag=1;
        $emailerr="Valid email required";
    }
    if($_POST["phoneNumber"]!=""){
        if(strlen($_POST["phoneNumber"])==11){
            $phoneNumber = test_input($_POST["phoneNumber"]);
            $flag=0;
        }
        else{
            $flag=1;
            $phoneNumbererr="Valid phone number required";
        }

    }
    else{
        $flag=1;
        $phoneNumbererr="Valid phone number required";
    }
    if(empty($_POST["gender"])){
        $flag=1;
        $gendererr="gender must be selected";
  
    }
    else{
        $gender = test_input($_POST["gender"]);
    }
    if($_POST["password"]!=""){
        $password = test_input($_POST["password"]);
    }
    else{
        $flag=1;
    }
    if($_POST["cpassword"]!=""){
        $cpassword = test_input($_POST["cpassword"]);
        if($password!=$cpassword)
        {
            $flag=1;
            $cpassworderr="confirm password must be same as password";
        }
    }
    else{
        $flag=1;
        $cpassworderr="confirm password must be filled";
    }
    if($_POST["dob"]!=""){
        $dob = test_input($_POST["dob"]);
    }
    else{
        $flag=1;
        $doberr="Date of birth must be selected";
    }
    if(empty($_POST["area"])){
        $flag=1;
        $areaerr="area must be selected";
    }
    else{
        $area = test_input($_POST["area"]);
    }
    if($_POST["city"]!=""){
        $city = test_input($_POST["city"]);
    }
    else{
        $flag=1;
        $cityerr="City must be selected";
    }
    if($_POST["userType"]!=""){
        $userType = test_input($_POST["userType"]);
    }
    else{
        $flag=1;
        $userType="Date of birth must be selected";
    }
    $country="Bangladesh";
    if($flag==1)
    {
        header("Refresh: 3; url=../view/users/registration.html");
        echo $fnameerr."<br>";
        echo $unameerr."<br>";
        echo $emailerr."<br>";
        echo$phoneNumbererr."<br>";
        echo$gendererr."<br>";
        echo$passworderr."<br>";
        echo$cpassworderr."<br>";
        echo$doberr."<br>";
        echo$areaerr."<br>";
        echo$cityerr."<br>";
    }
    else{
        include_once "../model/usersModel.php";
        create($fname,$uname,$email,$phoneNumber,$gender,$password,$dob,$area,$city,$userType,$country);

    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}