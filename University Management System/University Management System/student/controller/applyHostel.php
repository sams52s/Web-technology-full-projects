<?php

require_once '../model/model.php';


session_start();


if (isset($_POST['submit'])) {

   $nameErr = $idErr = $buildingErr =  "";



  $name = $id = $building = "";

 $flag=1;
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["name"])) {
    $nameErr= "name number is required";
    $flag=0;
  } else {

      $name = test_input($_POST["name"]);
      $nameErr= "";
  }

  if (empty($_POST["id"])) {
    $idErr= "id number is required";
    $flag=0;
  } else {

      $id = test_input($_POST["id"]);
      $idErr= "";
  }

  if (empty($_POST["building"])) {
    $buildingErr= "building is required";
    $flag=0;
  } else {

      $building = test_input($_POST["building"]);
      $buildingErr= "";
  }





if($flag==1)
{
  $data['username']=$_SESSION['username'];
  $data['name']=$name;
  $data['id']=$id;
  $data['building']=$building;


  if (addApplyHostelInfo($data)) {
   header('location:../view/dashboard.php');
  }

  else {
    echo 'Could not add!!';
  }
}
else {
  $args = array(
   'nameErr' => $nameErr,
   'idErr' => $idErr,
   'buildingErr' => $buildingErr,

);
     header("location:../view/applyHostel.php?" . http_build_query($args));
  }

}else {
  echo "You can not access this page!!";
}

?>
