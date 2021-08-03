<?php

$sname = "localhost";
$unmae = "admin";
$password = "123456";
$db_name = "world-vision";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}