<div class="purchase_form">
	<table>
		<form action="includes/save_records.php" method="post">
			<tr>
				<td>Batch No</td>
				<td><input type="text" name="batch_no" required></td>
				<td>Vendor Name</td>
				<td><input type="text" name="ven_name" required></td>
				<td>Mfg Date</td>
				<td><input type="text" name="mfg_date"></td>
				<td>Exp Date</td>
				<td><input type="text" name="exp_date"></td>
			</tr>
			<tr>
				<td>Mrp</td>
				<td><input type="text" name="mrp" required></td>
				<td>Purchase Price</td>
				<td><input type="text" name="per_price" required></td>
				<td>Medicine Type</td>
				<td><select name="m_type">
					  <option value="Capsules">Capsules</option>
					  <option value="Injection ">Injection </option>
					  <option value="Soap">Soap</option>
					  <option value="Saline">Saline</option>
					</select>
				</td>
				<td>Tab In Strip</small></td>
				<td><input type="text" name="no_item"></td>
			</tr>
			<tr>
			<tr>
				<td>Total Purchase</td>
				<td><input type="text" name="total_perch"></td>
				<td>Purchase Date</td>
				<td><input type="text" name="purch_date" value="<?php echo date("d/m/Y") ?>"></td>
			</tr>
			<tr class="submit">
				<td><input type="submit" name="submit" class="btn-submit"></td>
			</tr>
		</form>
	</table>
</div>