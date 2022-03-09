<?php
    	include('conn.php');
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `Player_fixtures` where pf_id='$id'");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Basic MySQLi Commands</title>
    </head>
    <body>
    	<h2>Edit</h2>
    	<form method="POST" action="update_player_fixtures.php?id=<?php echo $id; ?>">
            <label>Player name:</label><input type="text" value="<?php echo $row['fullname']; ?>" name="fullname">
            <br><br>
    		<label>Competition:</label><input type="text" value="<?php echo $row['comp_name']; ?>" name="comp_name">
            <br><br>
            <label>Goal Scored:</label><input type="text" value="<?php echo $row['goals_scored']; ?>" name="goals_scored">
            <br><br>
    		<input type="submit" name="submit" value="submit">
    		<a href="player_fixtures.php">Back</a>
    	</form>
    </body>
    </html>