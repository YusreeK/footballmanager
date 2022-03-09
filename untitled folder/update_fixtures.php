<?php
    	include('conn.php');
    	$id=$_GET['id'];
     
    	$fixture_date=$_POST['fixture_date'];
    	$fixture_time=$_POST['fixture_time'];
        $team_name=$_POST['team_name'];
    	$team_name1=$_POST['team_name1'];
        $comp_name=$_POST['comp_name'];
    	
     
    	mysqli_query($conn,"update `Fixtures` set fixture_date='$fixture_date', fixture_time='$fixture_time', 
        team_name='$team_name', team_name1='$team_name1', comp_name='$comp_name' where fixture_id='$id'");
    	header('location:fixtures.php');
    ?>