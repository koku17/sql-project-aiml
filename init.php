<?php
	$dbname = 'DistroDB';
	$table = 'Distroes';
	$host = 'localhost';
	$dsn = "mysql:dbname=$dbname; host=$host;";
	$user = 'root';
	$passwd = 'root';
	$connection = new PDO($dsn, $user, $passwd);
?>
