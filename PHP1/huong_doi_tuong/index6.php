
<?php 
		$str = "class hello";
		class hello{
			public function __construct(){
				//khai bao bien str thanh bien toan cuc thi moi su dung được bên trong class nếu biến này k phải biến của class.
				global $str;
				echo "<h1>$str</h1>";
			}
		}
$h=new hello();
	 ?>
