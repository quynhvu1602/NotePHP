<?php
	class model_phongban{
		//lay danh sach phong ban, tra vemot bien object
		public function danhsach_phongban(){
			global $db;
			$result=mysqli_query($db,"select * from phongban");
			$arr=array();
			while($rows=mysqli_fetch_object($result)){
				$arr[]=$rows;
			}
			return $arr;
		}
		//lay mot ban ghi tuong ung voi maphongban truyen vao
		public function get_phongban($maphongban){
			global $db;
			$result=mysqli_query($db,"select * from phongban where maphongban=$maphongban");
			return mysqli_fetch_object($result);
		}
		//update phong ban
		public function update_phongban($maphongban,$tenphongban){
			global $db;
			//thuc thi cau truy van, khong tra ve ket qua
			mysqli_query($db,"update phongban set tenphongban='$tenphongban' where maphongban=$maphongban");
		}
		//xoa phong ban
		public function delete_phongban($maphongban){
			global $db;
			mysqli_query($db,"delele from phongban where maphongban=$maphongban");
		}
		//them
		public function insert_phongban($tenphongban){
			global $db;
			mysqli_query($db,"insert into phongban set tenphongban=$tenphongban");
		}
	}


?>