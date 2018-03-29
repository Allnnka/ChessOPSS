<?php

function getDatabaseConnection()
{
    $connection = mysqli_connect("localhost", "root", "")
    or die('Error while connecting to server');
    
    $db = mysqli_select_db($connection, "opss")
    or die('Error while selecting database');

    mysqli_set_charset($connection, 'utf8');

    return $connection;
}

function executeQuery($query)
{
    $connection = getDatabaseConnection();

    $result = mysqli_query($connection, $query);

    mysqli_close($connection);

    return $result;
}