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
-Array trong PHP 
	gom 2 thanh phan
		-key : chi so cua mang
		-value: gia tri , value co the co cac gia tri khac nhau
	Mot so cach dinh nghia mang
		c1: $tenbien=array(giatri1,giatri2....)
			truy xuat phan tu thu 0:	 $tenbien[0];
			hien thi cau truc cua mang: 	print_r($tenbien);
			hien thi so luong phan tu: 	count($tenbien);
			them 1 phan tu vao mang: 	$tenbien[]=giatri;
			xoa mot phan tu trong mang: 	unset($tenbien[0]);- xoa phan tu so 0
			duyet tung phan tu cua array
				foreach($tenbien as $key=>$value){}
				foreach($tenbien as value)

		c2: co the dinh nghia duoc ten key
			$tenbien=array("tenkkey1"=>giatri,"tenkey2"=>giatri....)

		Mot phan tu cua Array co the chua mot hoac nhieu array khac
			vd: $tenbien=array(array1,array2....)

-->

<?php 
	//dinh nghia mang Array
	$dienthoai= array("iphone","samsung","mi","oppo","LG");
	//hien thi cau truc mang
	echo "<pre>";
	print_r($dienthoai);
	echo "</pre>";

	//them mot phan tu vao mang,  key tu dong tang len 1
	$dienthoai[]="Nokia";
	echo "<pre>";
	print_r($dienthoai);
	echo "</pre>";

	//xoa 1 phan tu
	unset($dienthoai[2]);
	echo "<pre>";
	print_r($dienthoai);
	echo "</pre>";

	for($i=0;$i<=3;$i++){
		unset($dienthoai[$i]);
	}
	echo "<pre>";
	print_r($dienthoai);
	echo "</pre>";

/*--------------*/
$sinhvien=array("hoten"=>"Nguyen Van A","tuoi"=>24,"email"=>"nva@gmail.com");
echo "<pre>";
print_r($sinhvien);
echo "</pre>";

echo "Ho va ten: ".$sinhvien["hoten"]."<br>";
echo "Tuoi: ".$sinhvien["tuoi"]."<br>";

foreach ($sinhvien as $ke=>$va){
	echo"<h4>Key: $ke- value: $va </h4>";
}

/*--------------*/
$sv=array();
//them 5 sinh vien
$sv[]=array("hoten"=>"Nguyen Van A","tuoi"=>24,"email"=>"nva@gmail.com");
$sv[]=array("hoten"=>"Nguyen Van B","tuoi"=>24,"email"=>"nva@gmail.com");
$sv[]=array("hoten"=>"Nguyen Van C","tuoi"=>24,"email"=>"nva@gmail.com");
$sv[]=array("hoten"=>"Nguyen Van D","tuoi"=>24,"email"=>"nva@gmail.com");
$sv[]=array("hoten"=>"Nguyen Van E","tuoi"=>24,"email"=>"nva@gmail.com");


?>	

<fieldset style="width:300px; margin: auto;">
	<legend>Dien thoai</legend>
	<table cellpadding="5" border="1" style="border-collapse: collapse;">
		<?php foreach($dienthoai as $key=>$value):?>
			<tr>
				<td>key: <?php echo $key;?> -Value: <?php echo $value; ?></td>
			</tr>
		<?php endforeach;?>
		
	</table>
</fieldset>

<fieldset style="width:300px; margin: auto;">
	<legend>Dien thoai</legend>
	<table cellpadding="5" border="1" style="border-collapse: collapse;">
		<?php foreach($dienthoai as $value):?>
			<tr>
				<td>Value: <?php echo $value; ?></td>
			</tr>
		<?php endforeach;?>
		
	</table>
</fieldset>

<fieldset style="width:300px; margin: auto;">
	<legend>SINH VIEN</legend>
	<table cellpadding="5" border="1" style="border-collapse: collapse; width:100%;">
		<tr>
			<th>HO va ten</th> <th>Tuoi</th><th>Email</th>
		</tr>
		<?php foreach($sv as $s):?>
		<tr>
			<td><?php echo $s["hoten"];?></td>
			<td><?php echo $s["tuoi"];?></td>
			<td><?php echo $s["email"];?></td>
		</tr>
	<?php endforeach;?>
	</table>
</fieldset>


</body>
</html>