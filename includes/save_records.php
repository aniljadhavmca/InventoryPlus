<?php 

include 'header.php'; 
include 'connect.php'; 

if(isset($_POST['submit']))
{
	
	$batch_no=$_POST['batch_no'];
	$ven_name=$_POST['ven_name'];
	$mfg=$_POST['mfg'];
	$exp_date=$_POST['exp_date'];
	$mrp=$_POST['mrp'];

	$per_price=$_POST['per_price'];
	$m_type=$_POST['m_type'];
	$no_item=$_POST['no_item'];
	$qty=$_POST['qty'];
	$purch_date=$_POST['purch_date'];

		
	if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
	}

	$sql="insert into purchase (batch_no, ven_name, mfg, exp_date, mrp, per_price, m_type, no_item, qty, purch_date ) values ('$batch_no','$ven_name','$mfg','$exp_date','$mrp','$per_price','$m_type','$no_item','$qty', '$purch_date')";

	if (mysqli_query($conn, $sql)) {
	   	header('location: http://localhost/inventoryplus/index.php');
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}