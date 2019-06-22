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
	//--------------
	//lay bien act truyen tu url
	$act = isset($_GET["act"]) ? $_GET["act"] : "";
	$maphongban = isset($_GET["maphongban"]) ? $_GET["maphongban"] : 0;
	switch($act){
		case "edit":			
			//lay mot ban ghi tuong ung voi maphongban truyen vao
			$record = get_phongban($maphongban);
		break;
		case "do-edit":
			$tenphongban = $_POST["tenphongban"];
			//goi ham de update ban ghi
			update_phongban($maphongban,$tenphongban);
			//quay tro lai trang phong ban
			header("location:phongban.php");
		break;
		case "do-add":
			$tenphongban = $_POST["tenphongban"];
			//goi ham insert ban ghi
			insert_phongban($tenphongban);
			//quay tro lai trang phong ban
			header("location:phongban.php");
		break;
	}
	function insert_phongban($tenphongban){
		global $db;
		//insert ban ghi
		mysqli_query($db,"insert into phongban set tenphongban='$tenphongban'");
	}
	function update_phongban($maphongban,$tenphongban){
		global $db;
		//update ban ghi
		mysqli_query($db,"update phongban set tenphongban='$tenphongban' where maphongban=$maphongban");
	}
	function get_phongban($maphongban){
		global $db;
		$result = mysqli_query($db,"select * from phongban where maphongban=$maphongban");
		//duyet 1 phan tu, tra ve phan tu do
		$rows = mysqli_fetch_object($result);
		return $rows;
	}
	//--------------
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Them sua phong ban</title>
	<meta charset="utf-8">
</head>
<body>
<fieldset style="width: 300px; margin:auto;">
	<legend>Thêm sửa phòng ban</legend>
	<?php if($act == "edit"): ?>
	<form method="post" action="them-sua-phong-ban.php?act=do-edit&maphongban=<?php echo $maphongban; ?>">
	<?php else: ?>
	<form method="post" action="them-sua-phong-ban.php?act=do-add">
	<?php endif; ?>
		<table cellpadding="5">
			<tr>
				<td>Tên phòng ban</td>
				<td><input type="text" value="<?php echo isset($record->tenphongban)?$record->tenphongban:''; ?>" name="tenphongban" required></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" value="Thực hiện"></td>
			</tr>
		</table>
	</form>
</fieldset>
</body>
</html>