<?php

require_once '../db/queries.php';

if(isset($_POST['emailInput']) && isset($_POST['passwordInput']) && isset($_POST['repeatPasswordInput'])){

    if($_POST['passwordInput'] == $_POST['repeatPasswordInput'])
    {
        $email = $_POST['emailInput'];
        $password = $_POST['passwordInput'];
        $secret_key="6Ldn1lEUAAAAADj9Jq6ICM4kecS7aUCTZkN_6jRW";

        $check=file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
        $answer_reCaptcha=json_decode($check);
        if($answer_reCaptcha->success==true)
        {
            if(insertNewUser($email, $password))
                echo 'Successfully created new user.';
            else
                echo 'There was problem while creating new user.';
        }
        else
        {
            echo"Recaptcha not captured";
        }
    }
    else
    {
        echo 'Your passwords dont match.';
    }
}