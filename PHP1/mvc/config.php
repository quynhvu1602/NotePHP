<?php
	$hostname="localhost";
	$userdb="root";
	$password="";
	$dbname="php32_database";
	//ket noi csdl
	$db=mysqli_connect($hostname,$userdb,$password,$dbname);
	//set charset de lay du lieu theo kieu unicode
	mysqli_set_charset($db,"UTF8");
?>
