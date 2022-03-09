<?php
    	$id=$_GET['id'];
    	include('conn.php');
    	mysqli_query($conn,"delete from `Players` where player_id='$id'");
    	header('location:players.php');
    ?>