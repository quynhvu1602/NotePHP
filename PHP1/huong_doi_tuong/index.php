<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		//dinh nghia class oto
		class car{
			//dinh nghia bien
			public $color="ssss",$brand="ddddd";
			//dinh nghia ham
			public function info(){
				//de tac dong vao 1 bien ben trong class,dung cau truc $this->tenbien
				echo "<h1>Name: $this->color - Brand:$this->brand</h1>";
			}
			//ham tao la ham duoc tu dong goi dau tien khi khoi tao class. Cau truc: funtion __contruct(){}
			public function __construct(){
				echo "<h1>Ham tao duoc trieu goi dau tien</h1>";
			}
			//ham huy la ham duoc goi cuoi cung truoc khi ket thuc class(du dung o bat ki dau). function __destruct(){}
			public function __destruct(){
				echo "<h1>Ham huy duoc trieu goi cuoi cung</h1>";
			}
		}
		$car1 =new car();
		//tu bien object car1 co the tac dong duoc vao cac ham, cac bien ben trong class, tuy thuoc vao tam vuc cua bin. 
		//su dung cau truc : $tenObject->tenbien; $tenObject->tenham();
		$car1->color="abcd";
		$car1->brand="efgh";
		$car1->info();

	?>
</body>
</html>