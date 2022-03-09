<?php
    	$id=$_GET['id'];
    	include('conn.php');
    	mysqli_query($conn,"delete from `Teams` where team_id='$id'");
    	header('location:teams.php');
    ?>