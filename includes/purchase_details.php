<div class="purchase_data">
	<table>
		<tr>
			<td>Batch No</td>
			<td>Vendor Name</td>
			<td>Mfg Date</td>
			<td>Exp Date</td>
			<td>Mrp</td>
			<td>Purchase Price</td>
			<td>Medicine Type</td>
			<td>Tab In Strip</td>
		</tr>
		<?php
		include"connect.php";
		$sql="select * from purchase order by id desc";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		       // echo "id: " . $row["id"].  "<br>";

		        echo "<tr><td>".$row["batch_no"]."</td><td>".$row["ven_name"]."</td><td>".$row["mfg_date"]."</td><td>".$row["exp_date"]."</td><td>".$row["mrp"]."</td><td>".$row["per_price"]."</td><td>".$row["m_type"]."</td><td>".$row["no_item"]."</td></tr>";
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
	?>

	</table>
</div>