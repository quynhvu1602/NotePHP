<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<script type="text/javascript">
	function test(){			
	//lay gia tri cua the html co id=key		
		var key = document.getElementById("key").value;		
			//di chuyen den 1 website khac		
				location.href="php23.php?key="+key;		}
</script>

<h1 style="text-align: center"> <?php echo $_SERVER["REQUEST_METHOD"]; ?> </h1>
<fieldset style="width:400px; margin:auto;">
	<legend>Form</legend>
	<input type="text" id="key"  placeholder="nhap thong tin tim kiem">
	<a onclick="test();" href="#" title="">Tim Kiem</a>
	<h1> <?php echo isset($_GET["key"])? $_GET["key"]: "" ?> </h1>
	
</fieldset>


</body>
</html>
