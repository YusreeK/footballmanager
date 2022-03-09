<?php
    	include('conn.php');
     
    	$position_descr=$_POST['position_descr'];
    	
     
    	mysqli_query($conn,"insert into `Position` (position_descr) values ('$position_descr')");
    	header('location:Player_position.php');
     
    ?>
    