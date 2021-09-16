<?php

require_once '../model/model.php';


session_start();


if (isset($_POST['submit'])) {

   $courseErr = $sectionErr = $timeErr =  "";



  $course = $section = $time = "";

 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["course"])) {
    $courseErr= "course number is required";
    $flag=0;
  } else {

      $course = test_input($_POST["course"]);
      $courseErr= "";
  }

  if (empty($_POST["section"])) {
    $sectionErr= "section number is required";
    $flag=0;
  } else {

      $section = test_input($_POST["section"]);
      $sectionErr= "";
  }

  // if (empty($_POST["time"])) {
  //   $timeErr= "time is required";
  //   $flag=0;
  // } else {
  //
  //     $time = test_input($_POST["time"]);
  //     $timeErr= "";
  // }





if($flag==1)
{
  $data['username']=$_SESSION['username'];
  $data['course']=$course;
  $data['section']=$section;
//  $data['time']=$time;


  if (addApplyCourseInfo($data)) {
   header('location:../view/dashboard.php');
  }

  else {
    echo 'Could not add!!';
  }
}
else {
  $args = array(
   'courseErr' => $courseErr,
   'sectionErr' => $sectionErr,
//   'timeErr' => $timeErr,

);
     header("location:../view/applyCourse.php?" . http_build_query($args));
  }

}else {
  echo "You can not access this page!!";
}

?>
