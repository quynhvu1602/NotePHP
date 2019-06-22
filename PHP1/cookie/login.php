<?php

session_start();
$email="admin@mail.com";
$password="111";
//khi user an nut submit
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$mail=$_POST["email"];
	$pwd=$_POST["password"];

	if($email==$mail && $password==$pwd){
		//dang nhap thanh cong
		$_SESSION["email"]=$email;
		//di chuye dentrang admn.php
		header("location:admin.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<!--xac thuc viec dang nhap-->	
<fieldset style="width:300px; margin:30px auto;">
	<legend>LOGIN</legend>
	<form method="post" action="">
		<table cellpadding="5">
			<tr>
				<td>Email</td><td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Password</td><td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>