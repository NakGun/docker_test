<?php 

include 'database.php';

	$id        = $_POST['id'];
	$username  = $_POST['username'];
	$email     = $_POST['email'];
	$pwd       = $_POST['pwd'];

    //user update
    $link->query("update users set username='$username', email='$email',"
    ."pwd='$pwd' where id='$id'");

    #$conn->close();
?>