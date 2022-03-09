<?php
    	include('conn.php');
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `Fixtures` where fixture_id='$id'");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <style>
h1 {text-align: center;}

</style>
    <title>Fixtures</title>
	<h1>Fixtures</h1>
    </head>
    <body>
    <div align="center">
    	<h2>Edit</h2>
    	<form method="POST" action="update_fixtures.php?id=<?php echo $id; ?>">
    		<label>Date:</label><input type="text" value="<?php echo $row['fixture_date']; ?>" name="fixture_date">
            <br><br>
    		<label>Time:</label><input type="text" value="<?php echo $row['fixture_time']; ?>" name="fixture_time">
            <br><br>
            <label>Team Name:</label><input type="text" value="<?php echo $row['team_name']; ?>" name="team_name">
            <br><br>
            <label>Team Name:</label><input type="text" value="<?php echo $row['team_name1']; ?>" name="team_name1">
            <br><br>
    		<label>Competition:</label><input type="text" value="<?php echo $row['comp_name']; ?>" name="comp_name">
            <br><br>
    		<input type="submit" name="submit" value="Submit"><br><br>
    		<a href="teams.php">Back</a>
    	</form>
        </div>
    </body>
    </html>