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
	Ham duoc dinh nghia bang tu khoa  function tenham()
	cac kieu ham
		-ham co tham so
		ham khong co tham so truyen vao
		ham co gia tri tra ve
		ham khong co gia tri tra ve
	pham vi bien
		bien cuc bo : ton tai trong hoac ngoai ham , khia bao bien o ngaoi thi khong the su dung o ben trong ham va nguoc lai
		bien toan cuc: bien co the su dung o ca ben trg va ben ngoai ham, o ben trong ham muon khai bao mot bien thanh toan cuc thi su dung tu khoa global*/

$str= "<h1>php32</h1>";
	function xuat(){
		global $str;
		echo "<h1>bay gio la 8h</h1>";
		echo $str;
	}
	xuat();
	?>
</body>
</html>