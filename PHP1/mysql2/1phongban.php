<?php  
	//khai bao ca thong so de ket noi csdl
	$host="localhost";
	$user="root";
	$password="";
	$database="php32_database";
	//ket noi csdl,tra ve ket qua 1 bien object
	$db=mysqli_connect($host,$user,$password,$database);
	//lay du lieu ra la tien viet
	mysqli_set_charset($db,"UTF8");

	//xay dung ham lay tat ca cac abn ghi
	function danhsach_phongban(){
		global $db;
		$result=mysqli_query($db,"select * from phongban");
		//duyet qua cac phan tu trong object $result, moi phan tu gan vao thanh 1 phan tu cua bien array()
		$arr=array();
		while($rows=mysqli_fetch_object($result)){
			$arr[]=$rows;
		}
		return $arr;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		a{
			text-decoration: none;
		}
	</style>
</head>

<body>
	<fieldset style="width:400px; margin:auto;">
		<legend>Danh sach phong ban</legend>
		<a href="chucnang.php" title="">Thêm phong ban</a>
		<table cellpadding="5" border="1" style="width:100%; border-collapse: collapse;">
			<tr>
				<th>Ten phong ban</th><th style="width:100px;">Chuc nang</th>
			</tr>
			<?php $phongban=danhsach_phongban();
					foreach($phongban as $row):
					?>
			<tr>
				<td><?php echo ($row->tenphongban)?></td>
				<td style="width:100px; text-align: center;">
					<a href="chucnang.php?act=edit&maphongban=<?php echo $row->maphongban;?>">Sua</a>&nbsp;&nbsp;
					<a href="chucnang.php?act=delete&maphongban=<?php echo $row->maphongban;?>">Xoa</a>
				</td>
			</tr>

			<?php endforeach;?>
		</table>
	</fieldset>
</body>
</html>