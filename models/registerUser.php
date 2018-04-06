<?php

require_once '../db/queries.php';

if(isset($_POST['emailInput']) && isset($_POST['passwordInput']) && isset($_POST['repeatPasswordInput'])){

    if($_POST['passwordInput'] == $_POST['repeatPasswordInput'])
    {
        $email = $_POST['emailInput'];
        $password = $_POST['passwordInput'];

        if(insertNewUser($email, $password))
            echo 'Successfully created new user.';
        else
            echo 'There was problem while creating new user.';
    }
    else
    {
        echo 'Your passwords dont match.';
    }
}