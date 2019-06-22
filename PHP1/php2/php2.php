<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>php2</title>
	<link rel="stylesheet" href="">
</head>
<body>

<script type="text/javascript">
	function test(){
		//tac dong vao the form co id="frm" thuc hien submit
		document.getElementById("frm").submit();
	}

</script>

<!--
- Form submit khi click chuot vao nut input  type="submit"
- voi cac the thml khac muon tac dong vao the do de submit form thi phai dung JS
- Form chi submit khi tra ve true
- Mac dinh cua Form se o trang thai GET, muon form khi submit theo trang thai POST thi phai dat thuoc tinh method="post" vao trong the form
- Trong the form co thuoc tinh onsubmit="javascript", su kien nay se duoc kich hoat khi an vao form control submit
- requied: bat buoc phai nhap
- GET : cac bien duoc truyen len url
	- lay doi tuong theo kieu GET, du dung $_GET["ten bien"]
	
-->
<h1 style="text-align: center;"><?php echo $_SERVER["REQUEST_METHOD"]; ?></h1>
<fieldset style="width:400px; margin:auto;">
	<legend>Form</legend>
	<form method="post" id="frm" action="" >
		<input type="text" required name="txt" >
		<input type="submit" value="Go">&nbsp;
		<a onclick="test();" href="#" title="">Click here</a>
	</form>
	<h1><?php echo isset($_POST["txt"])? $_POST["txt"]:""?></h1>
</fieldset>
</body>
</html>