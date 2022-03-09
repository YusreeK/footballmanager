<?php
    	$id=$_GET['id'];
    	include('conn.php');
    	mysqli_query($conn,"delete from `Player_fixtures` where pf_id='$id'");
    	header('location:player_fixtures.php');
    ?>