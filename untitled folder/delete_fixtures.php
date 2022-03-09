<?php
    	$id=$_GET['id'];
    	include('conn.php');
    	mysqli_query($conn,"delete from `Fixtures` where fixture_id='$id'");
    	header('location:fixtures.php');
    ?>