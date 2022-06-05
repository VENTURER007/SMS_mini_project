<?php

error_reporting(0);
$serverName 		= "127.0.0.1";
$serverUser  		= "root";
$serverPass			= "";
$serverDB			= "login";


// create connection variable
$conn = new mysqli($serverName, $serverUser, $serverPass, $serverDB);

// check if something goes wrong with the connection
if ($conn->connect_error) {
	die("
		<center>
			<h2>Connection Failure:".$conn->connect_error."</h2>
		</center>
	");
}