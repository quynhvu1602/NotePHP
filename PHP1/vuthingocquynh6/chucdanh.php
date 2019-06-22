<?php 
//khai bao de ket noi toi csdl
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="php32_database";
//ket noi toi co so du lieu
	$db= mysqli_connect($hostname,$username,$password,$dbname);
//co the hien thi duoc tieng viet
	mysqli_set_charset($db,"UTF8");

	$act=isset($_GET["act"])?$_GET["act"]:'';
	$ma=isset($_GET["machucdanh"])?$_GET["machucdanh"]:0;
	switch($act){
		case 'delete':
			xoa_chucdanh($ma);
			
			break;
	}

	function danhsach_chucdanh(){
		global $db;
		$arr=array();
		$result=mysqli_query($db,"select * from chucdanh");
		while($rows=mysqli_fetch_object($result)){
			$arr[]=$rows;
		}
		return $arr;
	}

	function xoa_chucdanh($machucdanh){
		global $db;
		mysqli_query($db,"delete from chucdanh where machucdanh=$machucdanh; ");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Chuc danh</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<fieldset style="width:400px; margin:auto;">
		<legend>Danh sach cac chuc danh</legend>
		<div style="margin-bottom: 5px; width:30%; background-color: lightblue;"><a href="them_capnhat_chucdanh.php" style="text-decoration: none;">Thêm chuc danh</a></div>
		<form method="post" style="width:100%;">
			<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
				<tr>
					<th>Ten chuc danh</th> <th style="width: 100px;"></th>
				</tr>
				<?php 
					$chucdanh=danhsach_chucdanh();?>
				<?php 	foreach ($chucdanh as $key):  ?>
				<tr>
					<td><?php echo $key->tenchucdanh?></td>
					<td>
						<a href="them_capnhat_chucdanh.php?act=edit&machucdanh=<?php echo $key->machucdanh; ?>">Sua</a>&nbsp;&nbsp;
						<a href="chucdanh.php?act=delete&machucdanh=<?php echo $key->machucdanh; ?>">Xoa</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</table>
		</form>
	</fieldset>
</body>
</html>