<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<!--
- cookie la 1 doan ma luu o client (luu o trong may tinh ca nhan)
	-MOi trinh duyet se co mot folder luu cac doan ma cookie 
	-Cookie luu tren may tinh se co thoi gian  timeout, het thoi gian timeout thi cookie se bi trinh duyet xoa di. khi khoi tao cookie co the khoi tao thoi gian timeout cho no
	-Khoi tao bien cookie: 	 setcookie("tenbien","giatri",thoi_gian_ton_tai)
	- thoi_gian_ton_tai= time()+ so_giay_ton_tai;
	- Truy xuat bien cookie: 	$_COOKIE["tenbien"]
	- De huy bien cookie, cho thoi gian ton tai ve truoc thoi gian hien tai:	thoi_gian_ton_tai= time()- so_giay_ton_tai(hoac -1);
-ham time() se doi thoi gian hien tai ra mot so nguyen
- session: la 1 bien co pham vi lon hon bien toan cuc va bien cuc bo
	- Bien cuc bo va bien toan cuc chi ton tai tren 1 trang, qua trang khac thi bien do se khong dung laij duoc
	- bien session ton tai duoc tren nhieu trang thuoc cung 1 trinh duyet
	- De sd bien session can phai start session bang ham : ession_start()-> bat buoc. Neu khong sd ham nay thi bien session chi sd duoc tren 1 trang(giong bien toan cuc)
	- moi trinh duyet se co mot phien lam viec tuong ung voi id cua session bang ham: session_id();
	- Tao bien session:  $_SESSION["tenbien"];
	- Truy xuat bien : $_SESSION["TENBIEN"];
	- HUY SESSION bang ham unset($tenbiensession);
-->

<h1><?php echo time();?></h1>
<?php 
//khoi taon  bien cookie
setcookie("tenlop","php32",time()+5);
//truy xuat bien cookie
echo "<h1>".$_COOKIE["tenlop"]."</h1>";
?>
</body>
</html>