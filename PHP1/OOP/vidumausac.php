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
		class mausac{
			public $name;
			//hàm tạo có tham số truyền vào(trong 1 hàm có một hoặc nhiều tham số truyền vào)
			public function __construct($c){
				$this->name = $c;
				$this->info();
			}
			public function info(){
				echo "<h1>Color name:{$this->name}</h1>";
			}
		}
		// 1 class sẽ được thực hiện khi khởi tạo nó
		$mau = new mausac("green");
		$mau = new mausac("red");
	 ?>
</body>
</html>