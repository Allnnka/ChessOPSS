<?php

include_once 'connector.php';

function getAllUsers() // done
{
    $query = "SELECT * FROM Users";
    $resul = executeQuery($query);
    return $result;
}

function getUserIdByEmail($email) // done
{
    $query = "SELECT * FROM Users WHERE email='$email'";
    $result = executeQuery($query);
    $data = $result->fetch_assoc();

    if ($data != null) {
        return $data['id'];
    }

    return -1;
}

function checkUserExist($email, $password) // done
{
    $query = "SELECT * FROM Users WHERE email = '$email' AND password = '$password'";
    $result = executeQuery($query);
    $data = $result->fetch_assoc();

    if ($data != null) {
        return true;
    }

    return false;
}

function checkCanInsertUser($email) // done
{
    $query = "SELECT * FROM Users WHERE email = '$email'";
    $result = executeQuery($query);
    $data = $result->fetch_assoc();

    if ($data == null) {
        return true;
    }

    return false;
}

function insertNewUser($email, $password) // done
{
     if(checkCanInsertUser($email))
     {
        $query = "INSERT INTO Users (email, password) VALUES ('$email', '$password')";

        if(executeQuery($query))
            return true;
        return false;
     }
     return false;
}

function deleteUser($id) // done
{
    $query = "DELETE FROM Users WHERE id='$id'";
    if(executeQuery($query))
        return true;
    return false;
}