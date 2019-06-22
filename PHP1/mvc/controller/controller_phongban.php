<?php
	//load model_phongban
	include "model/model_phongban.php";
	class controller_phongban{
		//khai bao bien $model, la mot bien cua class controller_phongban
		public $model;
		public function __construct(){
			//gan bien $midel la 1 object model cua class model_phongan-> de ben trong class controller_phongban co the tac dong duoc cac ham trong class model_phongban thong qua bien model
			$this->model=new model_phongban();
			//goi ham danhsach_phong ban()-> ham nay nam trong class model_phongban
			$phongban=$this->model->danhsach_phongban();
			//load view de hien thi ra kq
			include "view/view_phongban.php";
			
		}
	}
	new controller_phongban();
?>