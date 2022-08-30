<?php

	require 'conn.php';
	$Srno = $_GET['Srno'];
	$q = "delete from emp where Srno=$Srno";
	echo "<script>confirm('Are you want to Delete ??')</script>";
	mysqli_query($conn,$q);
    echo "<script> window.location = 'emp.php';</script>";
	

?>
