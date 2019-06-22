<!DOCTYPE html>
<html>
<head>
	<title>OOP</title>
	<meta charset="utf-8">
	<!-- 
		Đối tượng là danh từ chỉ sự vật sự việc , trong php đối tượng được thực hiện thông qua cú pháp:
			- class tendoituong{
				pubic tenthuoctinh;
			}
	 -->
</head>
<body>
	<fieldset style="width: 300px;margin: auto;">
		<legend>Phep toan</legend>
		<form method="post" action="">
			<table cellpadding="5">
				<tr>
					<td>Số thứ 1</td><td><input type="number" name="so1" value="<?php echo isset($this->so1)? $this->so1:" "; ?>" required></td>
				</tr>
				<tr>			
					<td>Số thứ 2</td><td><input type="number" value="<?php echo isset($this->so2)? $this->so2:" "; ?>" required name="so2"></td>
				</tr>
				<tr>
				<td>Phép toán</td>
				<td>
					<select name="pheptoan">
						<option value="cong" <?php if($pt == "cong"): ?> selected <?php endif; ?> >Cộng</option>
						<option value="tru" <?php if($pt == "tru"): ?> selected <?php endif; ?> >Trừ</option>
						<option value="nhan" <?php if($pt == "nhan"): ?> selected <?php endif; ?> >Nhân</option>
						<option value="chia" <?php if($pt == "chia"): ?> selected <?php endif; ?> >Chia</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kết quả</td><td><input type="text" value="<?php echo isset($ketqua)? $ketqua:""; ?>" disabled></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" value="Thực hiện"></td>
			</tr>
			</table>
		</form>
	</fieldset>
</body>
</html>