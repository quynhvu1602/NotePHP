<?php
	class A{
		function a1(){
			echo "<h1> ham a1 cua class A</h1>";
		}
		function a2(){
			echo "<h1> ham a2 cua class A</h1>";
		}
		function hello(){
			echo "<h1> classA: hello</h1>";
		}
	}

	class B extends A{
		public function __construct(){
			//goi ham a1 cua class A
			$this->a1();
			//neu 2 lop co ham trung nhau thi se uu tien goi ham cua class B(class con)
			$this->hello();
			//cach goi ham hello cua class A(class cha) parent::ten_ham();
			parent::hello();

		}
		function b1(){
			echo "<h1> ham b1 cua class B</h1>";
		}
		function hello(){
			echo "<h1> classB: hello</h1>";
		}
	}

	$ht=new B();

?>