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
	function chonsoluongsv(){
		var soluong=document.getElementById("soluongsv").value;
		location.href="php24.php?soluong="+soluong;
		
	}
</script>


<fieldset style="width:400px; margin:auto;">
	<legend>Form</legend>
	<div>
		cho so luong sinh vien
		<select id="soluongsv">
			<?php for($i=1;$i<=5;$i++): ?>
				<option value="<?php echo $i;?>"> <?php echo $i; ?></option>
			<?php endfor; ?>
		</select>
		<input type="button" onclick="chonsoluongsv();" value="Thuc hien" name="">
	</div>
</fieldset>

<?php 
	if(isset($_GET["soluong"]) && $_SERVER["REQUEST_METHOD"]=="GET"): ?>
	<fieldset style="width:500px; margin:15px auto">
		<legend>Nhap danh sach sinh vien</legend>
		<form method="post" action="php24.php?soluong= <?php echo $_GET["soluong"]; ?>">
			<table cellpadding="5">
				<?php for($i=1;$i<= $_GET["soluong"];$i++):?>
					<tr>
						<td>Sinh vien <?php echo $i;?></td>
						<td><input type="text" required name="sv<?php echo $i; ?>"></td>
						<td><input type="text" required name="ns<?php echo $i; ?>"></td>
					</tr>
				<?php endfor;?>
				<tr>
					<td></td><td><input type="submit" value="Nhap thong tin"></td>
				</tr>
			</table>
		</form>
	</fieldset>
	<?php endif; ?>


<?php if(isset($_GET["soluong"]) && $_SERVER["REQUEST_METHOD"]=="POST"): ?>
		<fieldset style="width:500px; margin:15px auto;">
			<legend>Danh sach sinh vien</legend>
			<table cellpadding="5" border="1" style="width:100%; border-collapse: collapse;">
				<tr>
					<th>Ho va ten</th>
					<th>Ngay sinh</th>
				</tr>
				<?php for($i=1;$i<= $_GET["soluong"];$i++):?>
				<tr>
					<td><?php echo $_POST["sv$i"]; ?></td>
					<td><?php echo $_POST["ns$i"]; ?></td>
				</tr>
				<?php endfor;?>
			</table>
		</fieldset>
<?php endif;?>


</body>
</html>