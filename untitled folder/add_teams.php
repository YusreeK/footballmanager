<?php
    	include('conn.php');
     
    	$team_name=$_POST['team_name'];
    	$Email=$_POST['Email'];
     
    	mysqli_query($conn,"insert into `Teams` (team_name,Email) values ('$team_name','$Email')");
		
    	header('location:teams.php');
     
    ?>