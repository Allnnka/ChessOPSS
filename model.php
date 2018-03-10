<?php

function DBConnection()
{
    require_once 'system/db.php';

    echo $db_database;

    $connection = mysqli_connect($db_hostname, $db_username, $db_password)
    or die('Brak mozliwosci polaczenia sie do serwera');

    $db = mysqli_select_db($connection, $db_database)
    or die('Blad wyboru bazy danych');

    mysqli_set_charset($connection, 'utf8');

    echo 'Polaczenie OK';

    return $connection;

}

function DBResult($connection, $query)
{
    $result = mysqli_query($connection, $query);

    if(!$result)
    {
        echo 'Blad zapytania!';
    }
    else
        return $result;
}