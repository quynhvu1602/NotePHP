<fieldset style="width: 300px; margin:auto">
	<legend>Them sua phong ban</legend>
	<form method="post" action="<?php echo $form_action; ?>">
		<table cellpadding="5">
			<tr>
				<td>Ten phon ban</td>
				<td><input type="text" value="<?php echo isset($record->tenphongban)?$record->tenphongban:''; ?>" name="tenphongban" required></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" name="Thuc hien"></td>
			</tr>

		</table>
	</form>
</fieldset>