<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "res_webauth";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
