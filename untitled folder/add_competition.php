<?php
    	include('conn.php');
     
    	$comp_name=$_POST['comp_name'];
    	mysqli_query 
		($conn,  "INSERT INTO `Competition` (`comp_name`) VALUES ('$comp_name')");
		mysqli_query 
		($conn, "INSERT INTO `Report` (`comp_name`) VALUES ('$comp_name')");
    	header('location:competition.php');
     
    ?>
