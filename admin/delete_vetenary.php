<?php
include('../dbconfig.php');
	
	$info=$_GET['id'];
	
	mysqli_query($conn,"delete from vetenary where id='$info'");
	header('location:dashboard.php?info=show_vetenary');
?>