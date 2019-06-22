<?php
session_start();
//tao bien session de luu thong tin sinh vien, kiem tra xem bien nay ton tai chua, neu chua thi khoi tao cho no
if(isset($_SESSION["sv"])==false) 
	$_SESSION["sv"]=array();

class thongtin_sinhvien{
	public function them($hoten,$email){
		$_SESSION["sv"][]=array("hoten"=>$hoten,"email"=>$email);
	}
	public function xoa($key){
		//duyet qua cac phan tu cua session array , xao phan tu tuong ung voi key truyen vao
		foreach($_SESSION["sv"] as $k=>$v){
			if($key==$k) 
				unset($_SESSION["sv"][$k]);
		}
		header("location:index7.php");
	}
}

//khoi tao class sinh vien
class sinhvien{
	//tao bien cua class sinhvien
	public $thongtin;
	public function __construct(){
		//gan bien $thongtin la 1 object cua clss thongtin_sinhvien de tu class sinhvien co the goi duoc cac ham cua class tongtin_sinhkien thong qua bien $thongtin
		$this->thongtin=new thongtin_sinhvien();

		//them danh sach sinh vien
		if(count($_SESSION["sv"])==0){
			$this->thongtin->them("Nguyen Van A","a@gmail.com");
			$this->thongtin->them("Nguyen Van B","a@gmail.com");
			$this->thongtin->them("Nguyen Van C","a@gmail.com");
			$this->thongtin->them("Nguyen Van B","a@gmail.com");
			$this->thongtin->them("Nguyen Van E","a@gmail.com");
		}

		$act=isset($_GET["act"])?$_GET["act"]:"";
		switch($act){
			case "delete":
				$key=isset($_GET["key"])?$_GET["key"]:"";
				$this->thongtin->xoa($key);
			break;
		}
		
	}
}

new sinhvien();
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
	<fieldset style="width:500px; margin:auto">
		<legend>Danh sach sinh vien</legend>
		<table cellpadding="5" border="1" style="width:100%; border-collapse: collapse">
			<tr>
				<th>HO va ten</th>
				<th>email</th>
				<th></th>
			</tr>
			<?php 
			foreach($_SESSION["sv"] as $key=>$rows):
			?>
			<tr>
				<td><?php echo $rows["hoten"];?></td>
				<td><?php echo $rows["email"];?></td>
				<td style="text-align: center">
					<a href="index7.php?act=delete&key=<?php echo $key;?>">Delete</a>
				</td>
			</tr>
		<?php endforeach;?>
		</table>

	</fieldset>
</body>
</html>