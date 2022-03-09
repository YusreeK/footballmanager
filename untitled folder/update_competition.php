<?php
    	include('conn.php');
    	$id=$_GET['id'];
     
    	$comp_name=$_POST['competition'];
    	
     
    	mysqli_query($conn,"update `Competition` set comp_name='$comp_name' where comp_id='$id'");
    	header('location:competition.php');
    ?>