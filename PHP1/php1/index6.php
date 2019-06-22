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
-Form: su dung de truyen du lieu
-Form co 2 phuong thuc:
	-GET: truyen bien len url;
	-POST:truyen ngầm từ trang này sang trang khác
-Đối tượng  $_SERVER["REQUEST_METHOD"] se trả về trạng thái của trang(la kiểu GET hoặc POST)
-Form muốn truyền theo kiểu POST
	trong the form, dat thuộc tính action="post"
	khi ấn nút submit thì form sẽ truyền theo kiểu POST
	lấy giá trị truyền theo kiểu POST: $POST["ten form control"]
Ham isset(doi tuong): se trả về true nếu đố tượng tồn tại
*/


?>
<h1><?php echo $_SERVER["REQUEST_METHOD"]; ?></h1>
<fieldset style="width: 300px; margin:auto;">
	<legend>FORM</legend>
	<form method="post"  action="index6.php">
		<input type="text" name="txt" required><input type="submit" value="Go">
		<h1><?php echo isset($_POST["txt"]) ? $_POST["txt"]:""; ?></h1>
	</form>
</fieldset>
</body>
</html>