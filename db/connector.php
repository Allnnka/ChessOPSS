<?php

function getDatabaseConnection()
{
    require_once 'db/config.php';

    $connection = mysqli_connect($serverName, $userName, $password)
    or die('Error while connecting to server');

    $db = mysqli_select_db($connection, $databaseName)
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