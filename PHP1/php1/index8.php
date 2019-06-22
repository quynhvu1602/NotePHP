<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php if($_SERVER["REQUEST_METHOD"]=="POST"){ ?>
	<h1 style="color: <?php echo $_POST["mauchu"]; ?>;background-color: <?php echo $_POST["maunen"]; ?> "> 
	<?php echo $_POST["noidung"]; ?></h1>
<?php } ?>

<fieldset style="width:300px; margin:auto">
	<legend>FORM</legend>
	<form action="index8.php"  method="post">
		<table cellpadding="5">
			<tr>
				<td>Mau chu</td> <td><input type="color"  name="mauchu" ></td>
			</tr>
			<tr>
				<td>Mau nen</td> <td><input type="color"  name="maunen" ></td>
			</tr>
			<tr>
				<td>Noi dung</td> <td><input type="text"  required name="noidung"> </td>
			</tr>
			<tr>
				<td></td> <td><input type="submit" value="thuc hien" > </td>
			</tr>
			
		</table>
		<h1></h1>
	</form>
</fieldset>
</body>
</html>