<?php

include 'db/connector.php';

function getAllUsers()
{
    $query = "SELECT * FROM Users";
    $resul = executeQuery($query);
    return $result;
}

function checkUserExist($email, $password)
{
    $query = "SELECT COUNT() FROM Users WHERE email = $email AND password = $password";
    $result = executeQuery($query);
    return $result;
}

function addNewUser($email, $password)
{
    $query = "";
    $result = executeQuery($query);
    return $result;
}

function deleteUser($email)
{
    $query = "";
    $result = executeQuery($query);
    return $result;
}