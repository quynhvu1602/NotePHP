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
/*
bien cothe xuat o ben trong chuoi, dieu kien: chuoi phai bao quanh boi dau nhay doi("").neu vhuoi bao quanh boi dau nhay don('') thi tat ca se hieu la ki tu

*/
$str="hello";
echo "<h1>hello $str</h1>";
echo '<h1>hello $str</h1>';
?>


<fieldset style="width:300px;margin:auto;">
	<legend>vong lap for</legend>
	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
		<tr>
			<th>Danh sach</th>
		</tr>
		<?php for($i=1;$i<=10;$i++):?>
			<?php if($i%2==0):?>
			<tr style="background-color: yellow;">
				<td>Sinh vien thu <?php echo $i; ?></td>
			</tr>
			<?php else:?>
			<tr>
				<td>Sinh vien thu <?php echo $i; ?></td>
			</tr>
			<?php endif;?>
		<?php endfor; ?>
	</table>
</fieldset>

	
</body>
</html>