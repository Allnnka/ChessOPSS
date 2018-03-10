<?php

function getDane()
{
    $query = "SELECT * FROM test";
    $result = DBResult(DBConnection(), $query);

    echo 'Dziala';
}