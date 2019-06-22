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
	// tạo lớp có tên lớp học
		class lophoc{
			// tạo biến thuộc class -> đây goị là thuộc tính
			public $tenlop;
			//trong lớp sẽ có hàm tạo hàm này sẽ được gọi tự động khi khởi tạo lớp
			public function __construct(){
				echo "<h1>Hàm tạo được gọi đầu tiên</h1>";
			}
			//bên trong class sẽ có các phương thức -> chính là các hàm bên trong class
			public function setlophoc($lop){
				// để tác động vào biến của class sử dụng cấu trúc: $this->tên biến
				$this->tenlop = $lop;
				// gọi hàm thông tin (là hàm bên trong class này) theo cấu trúc : $this->tenham
				$this->thongtin();
			}
			public function thongtin(){
				echo "<h1>Tên lớp:{$this->tenlop}</h1>";
			}
			// hàm hủy là hàm được gọi cuối cùng trước khi kết thúc class
			public function __destruct(){
				echo "<h1>Hàm hủy được gọi trước khi kết thúc class</h1>"
			}
		}
		// khởi tạo lớp bằng cú pháp :  tenbien = new tenlop();
		$lh = new lophoc();
		// để tác động vào hàm bên trong class theo cấu trúc: tenbien->tenham
		$lh->setlophoc("PHP32");
	 ?>
</body>
</html>