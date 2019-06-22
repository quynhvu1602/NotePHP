<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Danh sach</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<fieldset style="width:400px; margin:auto;">
		<legend>Danh sach chuc danh</legend>
	<!-- them ban ghi moi-->
		<div style="margin-bottom:5px; text-decoration:none;">
			<a href="chucnang.php?act=add" title="">Them ban ghi</a>
		</div>
	<!-- them ban ghi moi-->
	
		<table cellpadding="5" border="1" style="width:100%; border-collapse:collapse;">
				<tr>
					<th>Ten chuc danh</th> <th style="width:100px;"></th>
				</tr>
			<?php foreach($chuc_danh as $row):?>
				<tr>
					<td><?php echo $row->tenchucdanh; ?></td>
					<td style="text-align:center;">
						<a href="chucnang.php?act=edit&machucdanh=<?php echo $row->machucdanh?>">Sua</a>
						&nbsp; &nbsp;
						<a href="chucnang.php?act=delete&machucdanh=<?php echo $row->machucdanh?>" >Xoa</a>
					</td>
				</tr>
			<?php endforeach;?>
		</table>
	</fieldset>
</body>
</html>