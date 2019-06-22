<?php 
//khai bao ca thong so de ket noi csdl
	$host="localhost";
	$user="root";
	$password="";
	$database="php32_database";
	//ket noi csdl,tda ve ket qua 1 bien object
	$db=mysqli_connect($host,$user,$password,$database);
	//lay du lieu ra la tien viet
	mysqli_set_charset($db,"UTF8");
	$act=isset($_GET["act"]) ? $_GET["act"]:"";
	$maphongban=isset($_GET["maphongban"])? $_GET["maphongban"]:0;

	

	switch ($act) {
		case 'edit':
			$result=mysqli_query($db,"select * from phongban where maphongban=$maphongban");
			$record=mysqli_fetch_object($result);
			break;

		case 'do_edit':
			$tenphongban=$_POST["tenphongban"];
			//thuc thi cau truy van
			mysqli_query($db,"update phongban set tenphongban='$tenphongban' where maphongban=$maphongban ; ");
			header("location:1phongban.php");
			break;

		case 'delete':
			mysqli_query($db,"delete from phongban where maphongban=$maphongban ; ");
			header("location:1phongban.php");
			break;

		case 'add':
			$tenmoi=$_POST["tenphongban"];
			$mamoi=$_POST["maphongban"];
			mysqli_query($db,"insert into phongban set maphongban='$mamoi' ,tenphongban='$tenmoi' ");
			header("location:1phongban.php");
			break;
		default:
			# code...
			break;
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
<?php if($act=='edit'):?>
	<form method="post" action="chucnang.php?act=do_edit&maphongban=<?php echo ($maphongban)?>">
		<fieldset style="width:300px; margin:auto;">
			<legend>Sua ten phong ban</legend>
			<table cellpadding="5">
				 <tr>
					<td>Ma phong ban</td>
					<td><?php echo ($record->maphongban)?></td>
				</tr> 
				<tr>
					<td>ten phong ban</td>
					<td><input type="text" value="<?php echo isset($record->tenphongban)?$record->tenphongban:''; ?>"  name='tenphongban' required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"   value="thuc hien" name=""></td>
				</tr>
			</table>
		</fieldset>
	</form>
 
<?php else:?>
	<form method="post" action="chucnang.php?act=add">
		<fieldset style="width:300px; margin:auto;">
			<legend>Sua ten phong ban</legend>
			<table cellpadding="5">
				 <tr>
					<td>Ma phong ban</td>
					<td><input type="text" name='maphongban' ></td>
				</tr> 
				<tr>
					<td>ten phong ban</td>
					<td><input type="text"   name='tenphongban' required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit"   value="thuc hien" name=""></td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php endif; ?>
</body>
</html>

