<?php
    	include('conn.php');
     
    	$fullname=$_POST['fullname'];
        $team_name=$_POST['team_name'];
    	$player_sqd_num=$_POST['player_sqd_num'];
        $position_descr=$_POST['position_descr'];
     
    	mysqli_query($conn,"INSERT INTO `Players` (fullname, team_name, player_sqd_num, position_descr) 
		VALUES ('$fullname', '$team_name', '$player_sqd_num', '$position_descr')");
    	header('location:players.php');
     
    ?> 