<!DOCTYPE html>
<html>
<head>
	<title>OOP</title>
	<meta charset="utf-8">
	<!-- 
	Tầm vực của biến : quy định phạm vi giới hạn truy cập. Một số tầm vực: có 3 tầm vực
		- pubic : có thể truy cập được ở bất cứ đâu
		- protected : 
			- Không thể truy cập từ bên ngoài lớp
			- Có thể truy cập ở trong nội tại lớp đó
			- Có thể truy cập ở lớp được kế thừa
		- private : 
			- Không thể truy cập từ bên ngoài lớp
			- Có thể truy cập ở trong nội tại lớp đó
			- Không thể truy cập ở lớp được kế thừa
	Kế thùa : sử dụng từ khóa extends để kế thừa 1 lớp khác. Khi 1 lớp A được kế thừa lớp B thì bên trong lớp A có thể sử dụng các biến, các hàm của lớp B tùy thuộc vào tâm vực của biến.  
	 -->
</head>
<body>
	<?php 
		$str = "class hello";
		class hello{
			public function __construct(){
				//khai bao bien str thanh bien toan cuc thi moi su dung được bên trong class nếu biến này k phải biến của class.
				global $str;
				echo "<h1>$str</h1>";
			}
		}
new hello();
	 ?>

	<?php 
	class A{
	  	public $tenlop ="PHP32", $monhoc = "PHP";
	  
	    public function thongtin(){
	  		echo "<h1>Tên lớp:{$this->tenlop} - Môn học: {$this->monhoc}</h1>";
	  	}
	  	public function hello(){
	  		echo "<h1>hello, i am in class A </h1>";
	  	}
	}
	class B extends A{
		public function __construct(){
			$this->thongtin();
			//muốn gọi lên hàm cấp cha khi tên hàm trùng nhau ở lớp thì phải dùng từ khóa parent
			$this->hello();
			parent::hello();
		}
		public function hello(){
	  			echo "<h1>xin chao</h1>";
	  		}
	}	
new B();

	  ?>
</body>
</html>