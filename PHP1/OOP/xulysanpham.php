<!DOCTYPE html>
<html>
<head>
	<title>xu ly file san pham</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		//kiểm tra nếu session product chưa tồn tại thì khởi tạo nó
	session_start();
		if(isset($_SESSION["product"]) == false)
			$_SESSION["product"] = array();
		class product{
			public function __construct(){
				$act = isset($_GET["act"]) ? $_GET["act"]:"";
				switch ($act) {
					case "delete":
						$key = isset($_GET["key"]) ? $_GET["key"]:"";
						foreach($_SESSION["product"] as $k=>$v){
							if($k == $k){
								//xóa file bằng hàm unlink(đường dẫn file)
								unlink("upload/".$v['img']);
								//xóa phần tử thứ k
								unset($_SESSION["product"][$k]);
							}
						}
						header("location:sanpham.php");
						break;
				}

				//khi ấn nút submit
				if($_SERVER["REQUEST_METHOD"] == "POST"){
					$name=$_POST["name"];
					$price=$_POST["price"];
					// sử dụng đối tượng $_FILES["ten form control"]["thuoctinh"] để thao tác trong việc xử lý upload file.
					/*
						$_FILES["ten form control"]["name"] ->tenfile
						$_FILES["ten form control"]["size"] -> kích thước file
						$_FILES["ten form control"]["tmp_name"] -> đường dẫn thư mục tạm
					*/
						echo $_FILES["img"]["tmp_name"];
						$img=time().$_FILES["img"]["name"];
						move_uploaded_file($_FILES["img"]["tmp_name"],"upload/$img");
						$_SESSION["product"][] = array("name"=>$name,"price"=>$price,"img"=>$img);
						//di chuyen den trang xylysanpham.php dể trạng thái của trang chuyển từ post thành get
						header("location:xulysanpham.php");
				}
				//include file sanpham.php
				include "sanpham.php";
			}
		}
		new product();
	 ?>
</body>
</html>