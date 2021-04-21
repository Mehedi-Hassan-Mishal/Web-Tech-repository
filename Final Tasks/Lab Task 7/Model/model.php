<?php

require_once 'db_connect.php';


function showAllProducts(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `admin` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showStudent($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `admin` where NAME = '$username'";

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
    $selectQuery = "SELECT * FROM `admin` WHERE NAME = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addSignupInfo($data){
    $conn = db_conn();
    $selectQuery = "INSERT into admin (NAME, EMAIL, BIRTHDATE,PASSWORD,GENDER)
VALUES (:name, :email, :birth, :password, :gender)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':birth' => $data['birth'],
                    ':password' => $data['password'],
                    ':gender' => $data['gender']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function updateStudent($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE admin set NAME = ?, EMAIL = ?, BIRTHDATE = ? where NAME = '$username'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['birth']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function updatePasswordStudent($username, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE admin set PASSWORD = '$password' where NAME = '$username'";
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
    $selectQuery = "DELETE FROM `admin` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}