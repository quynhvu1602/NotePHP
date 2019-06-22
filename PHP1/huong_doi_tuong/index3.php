<?php
namespace t1;
class test1{
	function hello(){
		echo "<h1> class test1 hello</h1>";
	}
	function str(){
		echo "<h1>  hello</h1>";
	}
}
//namespace t2;
class test2{
	function hello(){
		echo "<h1> class test2 hello</h1>";
	}
}
//khoi tao doi tuong 
use t1\test1;
$obj1=new test1();
$obj1->hello();
$obj1::str();

//ham function_exists(ten_ham) se tra ve true/false neu  ham da  ton tai/chua ton tai
//function test(){}
if(function_exists("test")) echo "<h1> ham test da ton tai</h1>";
else echo "<h1> ham test khong ton tai</h1>";



?>