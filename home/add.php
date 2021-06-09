<?php 

	include 'database.php';

	$id        = $_POST['id'];
	$username  = $_POST['username'];
	$email     = $_POST['email'];
	$pwd       = $_POST['pwd'];

	error_log ($id."\n", 3, "./debug.txt");
	
    $link->query("INSERT INTO users(id,username,email,pwd)VALUES('".$id."','".$username."','".$email."','".$pwd."')");
?>    