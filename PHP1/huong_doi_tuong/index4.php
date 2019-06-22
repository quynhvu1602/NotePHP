<?php
class pheptinh{
	public $so1,$so2;
	public function __construct($s1,$s2){
		$this->so1=$s1;
		$this->so2=$s2;

		$this->cong();
		$this->tru();

	}
	public function cong(){
		$kq=$this->so1+$this->so2;
		echo "<h1> {$this->so1}+{$this->so2}=$kq </h1>";
	}
	public function tru(){
		$kq=$this->so1 - $this->so2;
		echo "<h1> {$this->so1}-{$this->so2}=$kq</h1>";
	}
}

$tinh=new pheptinh(7,9);

?>