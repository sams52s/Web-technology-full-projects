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
    $selectQuery = "UPDATE studentinfo set IMAGE = '$file' where USERNAME = '$username'";
    try{
          $stmt = $conn->query($selectQuery);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function showAllReport(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `volunteerreport` ';
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
	$selectQuery = "SELECT * FROM `studentinfo` where USERNAME = '$username'";

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
    $selectQuery = "SELECT * FROM `studentinfo` WHERE USERNAME = '$username'";


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

function addApplyCourseInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into applycourse (USERNAME, COURSE,SECTION)
VALUES (:username, :course, :section)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':course' => $data['course'],
					':section' => $data['section']
				//	':time' => $data['time']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function addApplyHostelInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into applyhostel (USERNAME, BUILDING,ID,NAME)
VALUES (:username, :building, :id, :name)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':building' => $data['building'],
					':id' => $data['id'],
					':name' => $data['name']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function addPostAdInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into postadinfo (NAME, EMAIL, COURSE,SALARY,COMMENT)
VALUES (:name, :email, :coursename, :salary, :comment)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':coursename' => $data['coursename'],
					':salary' => $data['salary'],
					':comment' => $data['comment']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function update($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE studentinfo set NAME = ?, EMAIL = ?, PHONE = ? where USERNAME = '$username'";
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
    $selectQuery = "UPDATE studentinfo set PASSWORD = '$password' where USERNAME = '$username'";
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
