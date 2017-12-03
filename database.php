<?php
$server_name = 'mysql:host=localhost;dbname=register_form';
$username = "someuser";
$password = "pa55word";

try{
	$conn = new PDO($server_name, $username, $password);
}
catch(PDOException $e){
	$error_message = $e->getMessage();
	echo "Couldn't connect to database: $error_message";
	exit();
}

?>