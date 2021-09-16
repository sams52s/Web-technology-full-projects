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
    $selectQuery = "UPDATE teacherinfo set IMAGE = '$file' where USERNAME = '$username'";
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
    $selectQuery = 'SELECT * FROM `requestdonation` ';
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
	$selectQuery = "SELECT * FROM `teacherinfo` where USERNAME = '$username'";

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
    $selectQuery = "SELECT * FROM `teacherinfo` WHERE USERNAME = '$username'";


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
    $selectQuery = "INSERT into teacherinfo (NAME, EMAIL,USERNAME,PASSWORD,PHONE,LOCATION)
VALUES (:name, :email, :username, :password, :phone, :location)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
					':username' => $data['username'],
					':password' => $data['password'],
					':location' => $data['location'],
				//	':amount' => $data['amount'],
					':phone' => $data['phone']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function addPublishResultInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into result (USERNAME, NAME,EMAIL,COURSE,RESULT)
VALUES (:username, :name, :email, :course, :result)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
					':username' => $data['username'],
					':name' => $data['name'],
					':email' => $data['email'],
					':course' => $data['course'],
					':result' => $data['result']

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
    $selectQuery = "UPDATE teacherinfo set NAME = ?, EMAIL = ?, PHONE = ? where USERNAME = '$username'";
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
    $selectQuery = "UPDATE teacherinfo set PASSWORD = '$password' where USERNAME = '$username'";
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
