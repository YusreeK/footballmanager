<?php
    	$id=$_GET['id'];
    	include('conn.php');
    	mysqli_query($conn,"delete from `Position` where position_id='$id'");
    	header('location:Player_position.php');
    ?>