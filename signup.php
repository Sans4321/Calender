<?php
	include 'databaseconnection.php';
	//include 'hashing.php';

$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];


$sql= "INSERT INTO logins (First_name, Last_name , uid , pwd)
	VALUES ('$First_name','$Last_name','$uid','$pwd' )";
$result = $conn->query($sql);

header("Location: index.php");


?>
