<?php
    	include('conn.php');
    	$id=$_GET['id'];
     
    	$team_name=$_POST['team_name'];
    	$Email=$_POST['Email'];
     
    	mysqli_query($conn,"update `Teams` set team_name='$team_name', Email='$Email' where team_id='$id'");
    	header('location:teams.php');
    ?>