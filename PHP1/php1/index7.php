<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$s1=$_POST["so1"];
	$s2=$_POST["so2"];
	$ketqua=$s1+$s2;
}

?>


<fieldset style="width:300px; margin:auto">
	<legend>FORM</legend>
	<form action="index7.php"  method="post">
		<table cellpadding="5">
			<tr>
				<td>so thu 1</td> <td><input type="number" value="<?php echo isset($s1)?$s1:''; ?>" name="so1" required></td>
			</tr>
			<tr>
				<td>so thu </td> <td><input type="number" value="<?php echo isset($s2)?$s2:''; ?>" name="so2" required></td>
			</tr>
			<tr>
				<td>ketqua</td> <td><input type="number" value="<?php echo isset($ketqua)?$ketqua:''; ?>" name="ketqua" disabled></td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" value="Thuc hien" ></td>
			</tr>
		</table>
	</form>
</fieldset>



</body>
</html>