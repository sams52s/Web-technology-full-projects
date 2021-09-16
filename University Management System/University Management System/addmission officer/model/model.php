<?php

require_once 'db_connect.php';

function showImage($name){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `studentsinfo` where NAME = '$name'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}


function updateProfilePicture($username, $file){
    $conn = db_conn();
    $selectQuery = "UPDATE officerinfo set IMAGE = '$file' where USERNAME = '$username'";
    try{
          $stmt = $conn->query($selectQuery);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function showAllDonation(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `donation` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function show($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `officerinfo` where USERNAME = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `officerinfo` WHERE USERNAME = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addRegistrationInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into officerinfo (NAME, EMAIL,USERNAME,PASSWORD,PHONE,LOCATION)
VALUES (:name, :email, :username, :password, :phone, :location)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
					':username' => $data['username'],
					':password' => $data['password'],
					':location' => $data['location'],
			//		':amount' => $data['amount'],
					':phone' => $data['phone']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function addAllotCourseInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into course (NAME, CODE, SECTION,CLASSTIME)
VALUES (:name, :code, :section, :tim)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
					':code' => $data['code'],
					':section' => $data['section'],
					':tim' => $data['time']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function addAddStudentInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into studentinfo (NAME, EMAIL,USERNAME,PASSWORD,PHONE)
VALUES (:name, :email, :username, :password, :phone)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
					':username' => $data['username'],
					':password' => $data['password'],
					':phone' => $data['phone']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

// function addPostAdInfo($data){
// 	$conn = db_conn();
//     $selectQuery = "INSERT into postadinfo (NAME, EMAIL, COURSE,SALARY,COMMENT)
// VALUES (:name, :email, :coursename, :salary, :comment)";
//     try{
//         $stmt = $conn->prepare($selectQuery);
//         $stmt->execute([
//         	':name' => $data['name'],
//         	':email' => $data['email'],
//         	':coursename' => $data['coursename'],
// 					':salary' => $data['salary'],
// 					':comment' => $data['comment']
//
//           ]);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//     }
//
//     $conn = null;
//     return true;
// }


function update($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE officerinfo set NAME = ?, EMAIL = ?, PHONE = ? where USERNAME = '$username'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['phone']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function updatePassword($username, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE officerinfo set PASSWORD = '$password' where USERNAME = '$username'";
    try{
          $stmt = $conn->query($selectQuery);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function deleteProduct($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `products` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
