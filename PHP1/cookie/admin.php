<?php 
	session_start();
	//kiem tra bien session email da ton tai chua, neu chua ton tai thi user chua dang nhap --aa. di chuyen den trang login.php
	if(isset($_SESSION["email"]) == false){
		//di chuyen den trang login.php bang ham header("location:tentrang.php");
		header("location:login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>admin pageS</title>
	<link rel="stylesheet" href="">
</head>
<body>
<!--
- Neu user chua dang nhap ma truy cap vthanng vo trang admin thi bat user dang nhap, nau dung user va password thi moi chuyen den trang admin
-->
<h1>ADMIN PAGE</h1>

</body>
</html>