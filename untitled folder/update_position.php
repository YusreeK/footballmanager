<?php
    	include('conn.php');
    	$id=$_GET['id'];
     
    	$position_descr=$_POST['position_descr'];
    	
     
    	mysqli_query($conn,"update `Position` set position_descr='$position_descr' where position_id='$id'");
    	header('location:Player_position.php');
    ?>