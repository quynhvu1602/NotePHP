<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>chucnang</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<fieldset  style="width:400px; margin:auto;">
		<legend>Them chuc danh</legend>
		<form action="<?php echo $form_action;?>"  method="post">
			<table cellpadding="5">
				<tr>
					<td>Ten chuc danh</td>
					<td><input type="text" required name="tenchucdanh" value="<?php echo isset($record->tenchucdanh)?$record->tenchucdanh:''; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Thuc hien"></td>
				</tr>
		</table>
		</form>
	</fieldset>
</body>
</html>