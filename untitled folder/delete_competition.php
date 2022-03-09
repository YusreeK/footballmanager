<?php
    	$id=$_GET['id'];
    	include('conn.php');
    	mysqli_query($conn,"delete from `Competition` where comp_id='$id'");
    	header('location:competition.php');
    ?>