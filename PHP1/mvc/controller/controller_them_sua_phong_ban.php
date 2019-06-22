<?php 
//load file model_phongban
include_once"model/model_phongban.php";
class controller_them_sua_phong_ban{
	public $model;
	public function __construct(){
		$this->model=new model_phongban();
		//lay bien act-> la bien truyen tu url
		$act=isset($_GET["act"])? $_GET["act"]:"";
		$maphongban=isset($_GET["maphongban"])?$_GET["maphongban"]:0;
		switch ($act) {
			case 'edit':
				//tao bien $form_action de dua thuoc tinh action cua the form
				$form_action="them_sua_phong_ban.php?act=do_edit&maphongban=$maphongban";
				//lay 1 ban ghi tuong ung voi maphongban truyen vao
				$record=$this->model->get_phongban($maphongban);
				//load view
				include_once"view/view_them_sua_phong_ban.php";
			break;

			case 'do_edit':
				$tenphongban=$_POST["tenphongban"];
				//goi ham update_phongban
				$this->model->update_phongban($maphongban,$tenphongban);
				//quay lai trang index.php
				header("location:index.php");
			break;

			case 'delete':
				//goi ham delete_phongban
				$this->model->delete_phongban($maphongban);
				header("location:index.php");
			break;

			case 'add':
				$form_action="them_sua_phong_ban.php?act=do_add";
				include"view/view_them_sua_phong_ban.php";
			break;

			case 'do_add':
				$tenphongban=$_POST["tenphongban"];
				$this->model->insert_phongban($tenphongban);
				header("location:index.php");
			break;
		}
	}

}
	new controller_them_sua_phong_ban();

?>