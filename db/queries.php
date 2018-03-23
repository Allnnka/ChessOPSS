<?php

include 'db/connector.php';

function getAllUsers() // done
{
    $query = "SELECT * FROM Users";
    $resul = executeQuery($query);
    return $result;
}

function getUserIdByEmail($email) // done
{
    $query = "SELECT * FROM Users WHERE email ='" . $email . "'";
    $result = executeQuery($query);
    $data = $result->fetch_assoc();
    
    if($data != null)
        return $data['id'];
    
    return -1;
}

function checkUserExist($email, $password) // done
{
    $query = "SELECT * FROM Users WHERE email ='" . $email . "'" . "AND password ='" . $password . "'";
    $result = executeQuery($query);
    $data = $result->fetch_assoc();

    if($data != null)
        return true;
    return false;
}

function addNewUser($email, $password)
{
    if(!checkUserExist($email, $password))
    {
        $query = "INSERT INTO Users ('email', 'password') VALUES('" . $email . "','" . $password . "')";
        $result = executeQuery($query);
        //$data = $result->fetch_assoc();
        //return $data;
    }
}

function deleteUser($id)
{
    $query = "DELETE FROM Users WHERE id='" . $id . "'";
    $result = executeQuery($query);
    $data = $result->fetch_assoc();

    return $data;
}