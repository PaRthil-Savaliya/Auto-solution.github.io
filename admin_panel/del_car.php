<?php

	require 'conn.php';
	$Cid = $_GET['Cid'];
	$q = "delete from cars where Cid=$Cid";
	echo "<script>confirm('Are you want to Delete ??')</script>";
	mysqli_query($conn,$q);
    echo "<script> window.location = 'index_car_info.php';</script>";
	

?>
