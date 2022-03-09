<?php
    	include('conn.php');
    	$id=$_GET['id'];
     
    	$fullname=$_POST['fullname'];
    	$comp_name=$_POST['comp_name'];
        $goals_scored=$_POST['goals_scored'];
    	
       
    	
     
    	mysqli_query($conn,"update `Player_fixtures` set fullname='$fullname', comp_name='$comp_name', 
        goals_scored='$goals_scored' where pf_id='$id'");
    	header('location:player_fixtures.php');
    ?>