<div class="purchase_data">
	<table>
		<tr>
			<td>Batch No</td>
			<td>Vendor Name</td>
			<td>M.F.G</td>
			<td>Exp Date</td>
			<td>M.R.P</td>
			<td>Rate</td>
			<td>Medicine Type</td>
			<td>Tab In Strip</td>
		</tr>
		<?php
		include"connect.php";
		$sql="select * from purchase order by id desc";

		$result = $conn->query($sql);
		$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

		//echo $url;

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		       // echo "id: " . $row["id"].  "<br>";
		    	$total_mrp = $row["qty"] * $row["mrp"];

		    	if ( $url === '//localhost/inventoryplus/' || $url === '//localhost/inventoryplus/index.php') {
		       		 echo "<tr><td>".$row["batch_no"]."</td><td><a href='includes/stock_summery.php?item={$row['id']}'>".$row["ven_name"]."</a></td><td>".$row["mfg"]."</td><td>".$row["exp_date"]."</td><td>".$row["mrp"]."</td><td>".$row["per_price"]."</td><td>".$row["m_type"]."</td><td>".$row["no_item"]."</td></tr>";
		       	}

		       	else {
		       		echo "<tr><td>".$row["batch_no"]."</td><td><a href='stock_summery.php?item={$row['id']}'>".$row["ven_name"]."</a></td><td>".$row["mfg"]."</td><td>".$row["exp_date"]."</td><td>".$row["mrp"]."</td><td>".$row["per_price"]."</td><td>".$row["m_type"]."</td><td>".$row["no_item"]."</td></tr>";
		       	}
		        
		        //echo $total_mrp;
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
	?>

	</table>
</div>