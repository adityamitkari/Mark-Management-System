<?php
include('../dbconfig.php');
header('location:dashboard.php?info=feedback');

	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from feedback where id='$info'");
?>