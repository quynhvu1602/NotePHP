<!DOCTYPE html>
<html>
<head>
	<title>oop</title>
	<meta charset="utf-8">
</head>
<body>
	<fieldset style="width: 350px;margin: auto;">
		<legend>Thêm sản phẩm</legend>
		<!-- Muốn upload file thì phải đặt thuộc tính enctype="multipart/form-data" ở trong thẻ form -->
		<form method="post" action="" enctype="multipart/form-data">
			<table cellpadding="5">
				<tr>
					<td>Tên sản phẩm</td><td><input type="text" name="name" required></td>
				</tr>
				<tr>
					<td>Giá</td><td><input type="number"min="0" required name="price"></td>
				</tr>
				<tr>
					<td>Ảnh</td><td><input type="file" name="img"></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" name="" value="Thực hiện"></td>
				</tr>
			</table>
		</form>
	</fieldset>
	
	<fieldset style="width: 500px;margin: auto;">
		<legend>Danh sách sản phẩm</legend>
		<table cellpadding="5" border="1" style="width: 100%;border-collapse: collapse;">
			<tr>
				<th>Tên ảnh</th><th>Tên sản phẩm</th><th>Giá</th><th style="width: 70px;"></th>
			</tr>
			<?php foreach ($_SESSION["product"] as $key => $rows): ?>
			<tr>
				<td style="width: 100px;"><img style="width: 100px;"> src="upload/<?php echo $rows['img']; ?>"></td>
				<td><?php echo $rows['name']; ?></td>
				<td><?php echo number_format($row['price']); ?></td>
				<td style="text-align: center;"><a href="xulysanpham.php?act=delete&key=<?php echo $key ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		</table>
	</fieldset>
</body>
</html>