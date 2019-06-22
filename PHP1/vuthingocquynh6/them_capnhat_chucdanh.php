<?php  
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="php32_database";

	$db=mysqli_connect($hostname,$username,$password,$dbname);
	mysqli_set_charset($db,"UTF8");
	$act=isset($_GET["act"])? $_GET["act"]:"";
	$machucdanh=isset($_GET["machucdanh"]) ? $_GET["machucdanh"]:0;

	switch ($act) {
		case 'edit':
			$record=get_chucdanh($machucdanh);
			break;

		case 'do-edit':
			$tenmoi=$_POST["ten"];
			update_chucdanh($machucdanh,$tenmoi);
			header("location:chucdanh.php");
			break;
		
		case 'do-add':
			$themten=$_POST["ten"];
			add_chucdanh($themten);
			header("location:chucdanh.php");
			break;
	}

	function get_chucdanh($machucdanh){
		global $db;
		$result=mysqli_query($db,"select * from chucdanh where machucdanh=$machucdanh;");
		$row=mysqli_fetch_object($result);
		return $row;
	}
	function update_chucdanh($machucdanh,$tenmoi){
		global $db;
		mysqli_query($db,"update chucdanh set tenchucdanh='$tenmoi' where machucdanh=$machucdanh");
	}
	function add_chucdanh($tenchucdanh){
		global $db;
		mysqli_query($db,"insert into chucdanh set tenchucdanh='$tenchucdanh'; ");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Them va cap nhat</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<fieldset  style="width:400px; margin:auto;">
		<legend>Them va cap nhat</legend>
		<?php if($act=="edit"):?>
			<form method="post" action="them_capnhat_chucdanh.php?act=do-edit&machucdanh=<?php echo $machucdanh; ?>">
		<?php else: ?>	
			<form method="post" action="them_capnhat_chucdanh.php?act=do-add">
		<?php endif;?>	
				<table style="margin:auto;">
					<tr> 
						<td>Ten chuc danh</td>
						<td><input type="text" name="ten" value="<?php echo isset($record->tenchucdanh)?$record->tenchucdanh:''; ?>" required></td>
					</tr>
					<tr><td></td><td><input type="submit" value="Thuc hien" name=""></td></tr>
				</table>
			</form>
		
	</fieldset>
</body>
</html>