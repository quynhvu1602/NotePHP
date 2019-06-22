<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
/*
- bien: dung de luu du lieu
- quy tac khai bao bien:
	$tenbien
	cac bien khong chua cac ki tu dac biet
	so khong duoc dung dau ten bien
- cac kieu bien
*/

$so=5;
if($so%2==0):?>
	<h1>so <?php echo $so; ?> la so chan</h1>
<?php else:?>
	<h1>so <?php echo $so?> la so le</h1>
<?php endif;?>





</body>
</html>