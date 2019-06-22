<!DOCTYPE html>
<html>
<head>
	<title>OOP</title>
	<meta charset="utf-8">
	<!-- 
		Đối tượng là danh từ chỉ sự vật sự việc , trong php đối tượng được thực hiện thông qua cú pháp:
			- class tendoituong{
				pubic tenthuoctinh;
			}
	 -->
</head>
<body>
	<?php 
	class pheptoan{
		public $so1,$so2;
		public function __construct(){
			$pt = " ";
			// khi ấn nút submit
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$s1 = $_POST["so1"];
				$s2 = $_POST["so2"];
				$pt = $_POST["pheptoan"];
				//....
				$this->so1 = $s1;
				$this->so2 = $s2;
				$ketqua="";
				switch ($pt) {
					case "cong": $ketqua = $this->cong();
						break;
						case "tru": $ketqua = $this->tru();
						break;
						case "nhan": $ketqua = $this->nhan();
						break;
						case "chia": $ketqua = $this->chia();
						break;
				}
			}
			//load file phep toan để hiển thị form
			include "pheptoan.php";
		}
		public function cong(){
			$ketqua = $this->so1 + $this->so2;
			return $ketqua;
		}
		public function tru(){
			$ketqua = $this->so1 - $this->so2;
			return $ketqua;
		}
		public function nhan(){
			$ketqua = $this->so1 * $this->so2;
			return $ketqua;
		}
		public function chia(){
			$ketqua = $this->so1 / $this->so2;
			return $ketqua;
		}
	}
		// khởi tạo class
		new pheptoan();
	 ?>
</body>
</html>