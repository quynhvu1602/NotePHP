<?php
include"model/model_chucdanh.php";
class controller_chucnang_chucdanh{
	public $model;
	public function __construct(){
		$this->model= new model_chucdanh();

		//lay bien $act truyen tu url
		$act=isset($_GET["act"])?$_GET["act"]:"";
		$machucdanh=isset($_GET["machucdanh"])?$_GET["machucdanh"]:0;

		switch ($act) {
			case 'add':
				//khai bao bien la $form_action de biet duoc sau khi an nut submit thi thuc hien cuc nang add hay edit
				$form_action="chucnang.php?act=do_add";
				include "view/view_chucnang_chucdanh.php";
				break;

			case 'do_add':
				$tenchucdanh=$_POST["tenchucdanh"];
				//goi ham add trong class model_chucdanh
				$this->model->add($tenchucdanh);
				//quay lai trang index.php;
				header("location:index.php");
				break;

			case 'edit':
				//khai bao bien la $form_action de biet duoc sau khi an nut submit thi thuc hien cuc nang add hay edit
				$form_action="chucnang.php?act=do_edit&machucdanh=$machucdanh";
				//goi ham get_a_record de lay 1 ban ghi
				$record=$this->model->get_a_record($machucdanh);
				include "view/view_chucnang_chucdanh.php";
				break;

			case 'do_edit':
				$tenchucdanh=$_POST["tenchucdanh"];
				//goi ham add trong class model_chucdanh
				$this->model->edit($machucdanh,$tenchucdanh);
				//quay lai trang index.php;
				header("location:index.php");
				break;

			case 'delete':
				$this->model->delete($machucdanh);
				//quay lai trang index.php;
				header("location:index.php");
				break;


			default:
				# code...
				break;
		}
	}
}

new controller_chucnang_chucdanh();
?>