<?php 

require_once 'db_connect.php';

function addUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into teacher (Name,Email,  uname, password)
VALUES (:name,:email, :uname, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name'     => $data['name'],
            ':uname'     => $data['uname'],
        	':email' => $data['email'],
        	':password' => $data['password'],
        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function searchUser($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `teacher` WHERE uname = ?";

    
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$user_name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function showData($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `teacher` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}

function updateData($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE teacher set Name = ?, Uname = ?, Email = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['uname'], $data['email'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
