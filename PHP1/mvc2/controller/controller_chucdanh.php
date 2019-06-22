<?php
//load file model_chucdanh.php
include "model/model_chucdanh.php";
class controller_chucdanh{
//khai bao bien $model -> chi la mot bien trong clas
	public $model;
	public function __construct(){
		//gan bien $model la mot bien object cua class model_chucdanh -> de thong qua bien $model goi ham ben trong class model_chucdanh.
		$this->model =new model_chucdanh();

		//goi ham danh_sach_chucdanh() trong class model_chucdanh de lay ket qua tra ve
		$chuc_danh=$this->model->danh_sach_chucdanh();
		//load view de hien thi ket qua
		include "view/view_chucdanh.php";
	}

}

//muon thuc thi class controller_chucdanh thi phai goi class
new controller_chucdanh();
?>