<?php

include 'db/connector.php';

function testGet()
{
    $query = "SELECT * FROM test";

    $result = executeQuery($query);

    return $result;
}