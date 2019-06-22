<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<!--
- Form submit khi click chuot vao nut  input  type="submit"
- voi cac the html khac muon tac dong vao the do de sunmit form thi phai dung JS
- Form chi submit khi tra ve true
- Mac dinh cua Form se o trang thai GET, muon form khi submit theo trang thai POST thi phai dat thuoc tinh method="post" vao trong the form
- Trong the form co thuoc tinh onsubmit="javascript", su kien nay se duoc kich hoat khi an vao forn control submit
- requied: bat buoc phai nhap
- GET : cac bien duoc truyen len url
	- lay doi tuong theo kieu GET, du dung $_GET["ten bien"]
	- cau truc ca bien truyen len url:
		tentrang.php?bien1=giatri1&bien2=giatri2...
		-moi bien cach nhau boi dau &	
-->
<script type="text/javascript">
	function test(){
		//lay gia tri cua the html co gia tri id=key
		var key=document.getElementById("key").value;
		//di chuyen den mot website khac
		location.href="php25.php?key="+key;		
	}
</script>


<h1 style="text-align: center;"><?php echo $_SERVER["REQUEST_METHOD"]; ?></h1>
<fieldset style="width:400px; margin:auto;">
	<legend>Form</legend>
	<input type="text" id="key"  placeholder="nhap thong tin tim kiem">
	<a onclick="test();" href="#" title="">Tim Kiem</a>
	<h1> <?php echo isset($_GET["key"])? $_GET["key"]: "" ?></h1>
</fieldset>

</body>
</html>