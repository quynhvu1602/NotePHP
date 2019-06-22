<!DOCTYPE html>
<html>
<head>
	<title>oop</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
	class sinhvien{
		//có thể tạo biến và gán giá trị mặc định cho biến
		public $sv = array();
		public function __construct(){
			
		}
		public function setsinhvien($hoten){
			$this->sv[] = $hoten;
		}
		public function hienthi(){
			foreach($this->sv as $value){
				echo "<h1>{$value}</h1>";
			}
		}
	}

	$s = new sinhvien();
	$s->setsinhvien("Nguyễn Văn A");
	$s->setsinhvien("Nguyễn Văn B");
	$s->hienthi();
	 ?>
</body>
</html>