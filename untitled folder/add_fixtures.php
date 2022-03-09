<?php
    	include('conn.php');
     
    	$fixture_date=$_POST['fixture_date'];
        $fixture_time=$_POST['fixture_time'];
    	$team_name=$_POST['team_name'];
        $team_name1=$_POST['team_name1'];
    	$comp_name=$_POST['comp_name'];
     
    	mysqli_query($conn,"insert into `Fixtures` (fixture_date, fixture_time, team_name, team_name1, comp_name) 
		values ('$fixture_date', '$fixture_time', '$team_name', '$team_name1', '$comp_name')");
    	header('location:fixtures.php');
     
    ?> 