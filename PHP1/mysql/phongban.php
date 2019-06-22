<?php 
	//khai bao thong tin ket noi csdl
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "php32_database";
	//ket noi csdl, tra thong tin ve mot bien
	$db = mysqli_connect($hostname,$username,$password,$dbname);
	//set charset de hien thi duoc tieng viet
	mysqli_set_charset($db,"UTF8");
	//---------
	$act = isset($_GET["act"]) ? $_GET["act"] : "";
	$maphongban = isset($_GET["maphongban"]) ? $_GET["maphongban"] : 0;
	switch($act){
		case "delete":
			//goi ham xoa ban ghi
			delete_phongban($maphongban);
			//quay tro lai trang phong ban
			header("location:phongban.php");
		break;
	}
	//ham xoa phong ban
	function delete_phongban($maphongban){
		global $db;
		mysqli_query($db,"delete from phongban where maphongban=$maphongban");
	}
	//---------
	//tao ham lay danh sach tat cac cac ban ghi trong table phongban
	function danhsach_phongban(){
		//khai bao bien db thanh bien toan cuc de su dung duoc o ben trong ham
		global $db;
		//thuc hien truy van sql, tra ket qua ve mot bien ojbect
		$result = mysqli_query($db,"select * from phongban");
		//khai bao bien array
		$arr = array();
		//duyet tung phan tu cua object $result, tuong ung voi moi phan tu thi nem vao array
		while($rows = mysqli_fetch_object($result)){
			$arr[] = $rows;			
		}
		return $arr;		
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>phong ban</title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width: 400px; margin:auto;">
	<legend>Danh sách phòng ban</legend>
	<div style="margin-bottom: 5px;"><a href="them-sua-phong-ban.php">Thêm phòng ban</a></div>
	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
		<tr>
			<th>Tên phòng ban</th><th style="width: 100px;"></th>
		</tr>
		<?php 
			//goi ham danhdanh_phongban() de lay ket qua tra ve bien $phongban
			$phongban = danhsach_phongban();
			//duyet bien de xuat gia tri len man hinh			
		 ?>
		 <?php foreach($phongban as $rows): ?>
		 <tr>
		 	<td><?php echo $rows->tenphongban; ?></td>
		 	<td style="text-align: center;">
		 		<a href="them-sua-phong-ban.php?act=edit&maphongban=<?php echo $rows->maphongban; ?>">Edit</a>&nbsp;&nbsp;
		 		<a href="phongban.php?act=delete&maphongban=<?php echo $rows->maphongban; ?>">Delete</a>
		 	</td>
		 </tr>
		<?php endforeach; ?>
	</table>
</fieldset>
</body>
</html>