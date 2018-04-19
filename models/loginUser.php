<?php
$password=$_POST['password'];
$email=$_POST['email'];
require_once '../db/queries.php';

session_start();
	
	if (checkUserExist($email,$password))
	{
		$_SESSION['logIn'] = true;
		header('Location: ../index.php');
		exit();
	}
	else
	{
		header('Location: ../login.php');
		exit();
	}
?>