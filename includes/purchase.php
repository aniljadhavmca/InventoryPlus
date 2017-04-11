<div class="purchase_form" style="background: rgba(0, 150, 136, 0.11);">
	<table>

	<?php
		$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
		if ( $url === '//localhost/inventoryplus/' || $url === '//localhost/inventoryplus/index.php') {
	 ?>
		<form action="includes/save_records.php" method="post"> 
		<?php } else { ?>
		<form action="save_records.php" method="post"> 
		<?php } ?>
			<tr>
				<td>Batch No</td>
				<td><input type="text" name="batch_no" required></td>
				<td>Particulars</td>
				<td><input type="text" name="ven_name" required></td>
				<td>M.F.G</td>
				<td><input type="text" name="mfg_date"></td>
				<td>Exp Date</td>
				<td><input type="date" name="exp_date"></td>
			</tr>
			<tr>
				<td>M.R.P</td>
				<td><input type="number" name="mrp" min="1" step="any" required></td>
				<td>Rate</td>
				<td><input type="number" name="per_price" min="1" step="any" required></td>
				<td>Medicine Type</td>
				<td><select name="m_type">
					  <option value="Capsules">Capsules</option>
					  <option value="Injection ">Injection </option>
					  <option value="Soap">Soap</option>
					  <option value="Saline">Saline</option>
					</select>
				</td>
				<td>Tab In Strip</small></td>
				<td><input type="text" name="no_item" required></td>
			</tr>
			<tr>
			<tr>
				<td>Quntity ( QTY )</td>
				<td><input type="text" name="qty"></td>
				<td>Purchase Date</td>
				<td><input type="text" name="purch_date" value="<?php echo date("d-m-Y") ?>"></td>
			</tr>
			<tr class="submit">
				<td><input type="submit" name="submit" class="btn-submit"></td>
			</tr>
		</form>
	</table>
</div>