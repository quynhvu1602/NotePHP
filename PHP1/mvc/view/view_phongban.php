<fieldset style="width: 400px; margin:15px auto;"> 
	<legend>Danh sach phong ban</legend>
	<a href="them_sua_phong_ban.php?act=add">add</a>
	<table cellpadding="5" border="1" style="border-collapse:collapse; width:100%;">
		<tr>
			<th>Ten phong ban</th><th style="width:100px;">Chuc nang</th>
		</tr>
		<?php foreach($phongban as $rows): ?>
		<tr>
			<td><?php echo $rows->tenphongban;?></td>
			<td>
				<a href="them_sua_phong_ban.php?act=edit&maphongban=<?php echo $rows->maphongban;?>">Edit</a>&nbsp;&nbsp;
				<a href="them_sua_phong_ban.php?act=delete&maphongban=<?php echo $rows->maphongban;?>">Delete</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</fieldset>