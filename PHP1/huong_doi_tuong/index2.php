<?php
	class test1{
		//ham tao
		public function __construct(){
			echo "<h1> ham tao cua class test1</h1>";
		}
	}

	class test2{
		//ham tao
		public function __construct($str,$tt){
			echo "<h1> $str - $tt</h1>";
		}
	}


	//tao bien object 
	//khi ham tao khong co tham so/co tham so thi khi khoi tao object se khong co tham so truyen vao/phai co tham so truyen vao
	$t1=new test1();
	$t2=new test2("aaa","bbb");
?>