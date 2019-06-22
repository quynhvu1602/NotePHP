<?php 
session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sinh vien</title>
	<link rel="stylesheet" href="">
</head>
<body>

<fieldset style="width:300px; margin:30px auto;">
		<legend>Them sinh vien</legend>
		<form method="post">
			<table cellpadding="5"> 
				<tr>
					<td>Ho va ten</td><td><input type="text" name="hoten" requied ></td>
				</tr>
				<tr>
					<td>Email</td><td><input type="email" name="email" requied ></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="SUBMIT"  ></td>
				</tr>
			</table>
		</form>
	</fieldset>	

<?php
//kiem tra bien session sinhvien xem da ton taichua, neu chua ton tai thi khoi tao no
	if(isset($_SESSION["sinhvien"])==false) $_SESSION["sinhvien"]=array();
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$hoten=$_POST["hoten"];
		$email=$_POST["email"];
		//them thong tin vao bien session array co ten la sinhvien
		$_SESSION["sinhvien"][]=array("hoten"=>$hoten,"email"=>$email);
		//di chuyen den trang sinhvien.php
		header("location:sinhvien.php");
	}

	$act=isset($_GET["act"])? $_GET["act"] :"";
	switch ($act) {
		case "delete":
			$key=isset($_GET["key"])? $_GET["key"]:"";
			foreach ($_SESSION["sinhvien"] as $k=>$v) {
				if($k==$key){
					unset($_SESSION["sinhvien"][$k]);
				}
				//dichuyen den trang sinhvien.php
				header("location:sinhvien.php");
			}
			break;

	}
?>

	<fieldset style="width:600px; margin:15px auto;">
		<legend>Danh sach sinh vien</legend>
		<form method="post">
			<table cellpadding="5" border="1" style="border-collapse: collapse; width:100%;"> 
				<tr>
					<th>Ho va ten</th><th>Email</th><th style="width: 200px;"></th>
				</tr>
				<?php foreach($_SESSION["sinhvien"] as $key=>$sv): ?>
				<tr>
					<td><?php echo $sv["hoten"];?></td>
					<td><?php echo $sv["email"];?> </td>
					<td style="text-align: center;">
						<a href="sinhvien.php?act=delete&key=<?php echo $key;?>">delete</a>
					</td>
				</tr>
			<?php endforeach;?>
				
			</table>
		</form>
	</fieldset>	
</body>
</html>