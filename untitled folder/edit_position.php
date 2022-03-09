<?php
    	include('conn.php');
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `Position` where position_id='$id'");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
	<style>
h1 {text-align: center;}

</style>
    <title>Position</title>
	<h1>Position</h1>
    </head>
    <body>
	<div align="center">
    	<h2>Edit</h2>
    	<form method="POST" action="update_position.php?id=<?php echo $id; ?>">
		<label>Position:</label><input type="text" value="<?php echo $row['position_descr']; ?>" name="position_descr">
			<br><br>
    		<input type="submit" name="submit" value="Submit">
			<br><br>
    		<a href="player_position.php">Back</a>
    	</form>
		</div>
    </body>
    </html>