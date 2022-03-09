<?php
    	include('conn.php');
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `Teams` where team_id='$id'");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
	<style>
h1 {text-align: center;}

</style>
    <title>Teams</title>
	<h1>Teams</h1>
    </head>
    <body>
		<div align="center">
    	<h2>Edit</h2>
    	<form method="POST" action="update_team.php?id=<?php echo $id; ?>">
    		<label>Team Name:</label><input type="text" value="<?php echo $row['team_name']; ?>" name="team_name"><br><br>
    		<label>Email:</label><input type="text" value="<?php echo $row['Email']; ?>" name="Email"><br><br>
    		<input type="submit" name="submit" value="Submit"><br><br>
    		<a href="teams.php">Back</a>
    	</form>
</div>
    </body>
    </html>