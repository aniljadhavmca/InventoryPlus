<?php 
	include 'header.php'; 
	include 'purchase.php'; 
	include 'purchase_details.php'; 
	include"connect.php";
?>
<table>
		<tr id="stk_summery-label">
			<td width="20%"	><b>Particulars</b></td>
			<td width="15%"><b>Purchase Date</b></td>
			<td width="15%"><b>Quntity</b></td>
			<td width="15%"><b>Amount </b></td>
			<td width="15%"><b>Total M.R.P</b></td>	
		</tr>
<?php 
if(isset($_GET['item']))
{
	$item=$_GET['item'];
	//echo $del;
	
	//$sql="delete from purchase where id='$item' ";

	$sql = "select ven_name, purch_date, mrp, per_price, qty from purchase where id='$item'";

	$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		       // echo "id: " . $row["id"].  "<br>";
		    	$total_mrp = $row["qty"] * $row["mrp"];

		    	$total_amount = $row["qty"] * $row["per_price"];

		        echo "<tr><td>".$row["ven_name"]."</td><td>".$row["purch_date"]."</td><td>".$row["qty"]."</td><td> $total_amount -/Rs</td><td> $total_mrp -/Rs  </td></tr>";

		        
		        //echo $total_mrp;
		    }
		} else {
		    echo "0 results";
		}
		$conn->close();
}

