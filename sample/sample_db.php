<!--
	sample db connection
	place file in root
-->

<?php

$user = 'user';
$pass = 'pass';
$host = 'localhost';
$dbName = 'db_name';

try {
	$db = new PDO("mysql:host=$host;dbname=$dbName",$user,$pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Error: " . $e->getMessage() . "<br/>";   die();
}