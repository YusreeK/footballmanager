<?php
    	include('conn.php');
     
    	$fullname=$_POST['fullname'];
        $comp_name=$_POST['comp_name'];
    	$goals_scored=$_POST['goals_scored'];
     
    	mysqli_query($conn,"insert into `Player_fixtures` (fullname, comp_name, goals_scored) 
		values ('$fullname', '$comp_name', '$goals_scored')");
    	header('location:player_fixtures.php');
     
    ?> 