<?php
    	include('conn.php');
    	$id=$_GET['id'];
     
    	$fullname=$_POST['fullname'];
    	$team_name=$_POST['team_name'];
        $player_sqd_num=$_POST['player_sqd_num'];
    	$position_descr=$_POST['position_descr'];
       
    	
     
    	mysqli_query($conn,"update `Players` set fullname='$fullname', team_name='$team_name', 
        player_sqd_num='$player_sqd_num', position_descr='$position_descr' where player_id='$id'");
    	header('location:players.php');
    ?>