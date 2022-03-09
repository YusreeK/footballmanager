<?php
    	include('conn.php');
     
    	$comp_name=$_POST['fullname'];
        $comp_name=$_POST['team_name'];
        $comp_name=$_POST['comp_name'];
        $comp_name=$_POST['Email'];
        $comp_name=$_POST['goals_scored'];
        $comp_name=$_POST['fixture_date'];
        $comp_name=$_POST['fixture_time'];
        
    	mysqli_query($conn,"insert into `Report` (fullname, team_name, comp_name, Email, goals_scored, fixture_date, fixture_time) 
		values ('$fullname', '$team_name', '$comp_name', '$Email', '$goals_scored', '$fixture_date', '$fixture_time')");
    	
     
    ?>