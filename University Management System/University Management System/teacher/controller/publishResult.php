<?php

require_once '../model/model.php';

session_start();



if (isset($_POST['submit'])) {

   $resultErr = $courseErr = $nameErr = $websiteErr =$error= "";

  $usernameErr=$passwordErr="";

 $confirmpasswordErr="";

  $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = $birth="";
  $username=$password="";
 $confirmpassword="";
 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }


 if (empty($_POST["name"])) {
   $nameErr= "Name is required";
   $flag=0;
 } else {

      $name = test_input($_POST["name"]);

            if(str_word_count($name)<2)
         {
         $nameErr= "Name must contains at least two words ";
          $flag=0;

         }

 }

 if (empty($_POST["email"])) {
   $emailErr= "Email is required";
   $flag=0;
 } else {
   $email = test_input($_POST["email"]);
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $emailErr= "Invalid email format";
     $flag=0;
   }
 }


    if(empty($_POST["course"]))
    {
      $courseErr= "course is required";
      $flag=0;
    }
    else {
      $course=test_input($_POST["course"]);
      $courseErr= "";
    }


    if(empty($_POST["result"]))
    {
      $resultErr= "Phone Number is required";
      $flag=0;
    }
    else {
      $result=test_input($_POST["result"]);
   $resultErr= "";
    }



if($flag==1)
{
  $data['username']=$_SESSION['username'];
  $data['name']=$name;
  $data['email']=$email;
  $data['course']=$course;
  $data['result']=$result;

  if (addPublishResultInfo($data)) {
    header('Location:../view/dashboard.php');
  }

  else {
    echo 'Could not add!!';
  }
}
else {
  $args = array(
   'courseErr' => $courseErr,
   'resultErr' => $resultErr,
   'nameErr' => $nameErr,
   'emailErr' => $emailErr,


);
     header("course:../view/publishResult.php?" . http_build_query($args));
  }

}else {
  echo "You can not access this page!!";
}

?>
