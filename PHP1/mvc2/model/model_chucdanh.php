<?php
class model_chucdanh{
	//lay tat ca cac ban ghi trong table chucdanh
	public function danh_sach_chucdanh(){
		//khai bao bien $db thành biến toàn cục để sử dụng bên trong class
		global $db;
		//truyền chuỗi sql để thực hiện truy vấn, kết quả trả về một biens object
		$result= mysqli_query($db,"select * from chucdanh");
		//duyet qua cac phan tu cua result, moi value duyet qua se duoc gan vao array
		$arr=array();
		while($rows=mysqli_fetch_object($result))
			$arr[]=$rows;
		return $arr;
	}

	//lay mot ban ghi tuong ung voi machucdanh truyen vao
	public function get_a_record($machucdanh){
		global $db;
		$result=mysqli_query($db,"select * from chucdanh where machucdanh=$machucdanh;");
		//duyet qua tung ban ghi
		$row=mysqli_fetch_object($result);
		return $row;
	}

	//them moi mot ban ghi -> thuc hien chuc nang add
	public function add($tenchucdanh){
		global $db;
		//thuc thi cau len sql
		mysqli_query($db,"insert into chucdanh set tenchucdanh='$tenchucdanh';");
	}

	//sua mot ban ghi-> thuc hien chuc nang edit
	public function edit($machucdanh,$tenchucdanh){
		global $db;
		mysqli_query($db,"update chucdanh set tenchucdanh='$tenchucdanh' where machucdanh=$machucdanh;");
	}

	//xoa mot ban ghi-> thuc hien chuc nang delete
	public function delete($machucdanh){
		global $db;
		mysqli_query($db,"delete from chucdanh where machucdanh=$machucdanh; ");
	}
}
?>