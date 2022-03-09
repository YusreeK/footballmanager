<?php
    	include('conn.php');
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `Competition` where comp_id='$id'");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
	<style>
h1 {text-align: center;}

</style>
    <title>Competitions</title>
	<h1>Competitions</h1>
 </head>

    <body>
		<div align="center">
    	<h2>Edit</h2>
    	<form method="POST" action="update_competition.php?id=<?php echo $id; ?>">
    		<label>Competition:</label><input type="text" value="<?php echo $row['comp_name']; ?>" name="competition"><br><br>
    		
    		<input type="submit" name="submit" value="Submit"><br><br>
    		<a href="competition.php">Back</a>
    	</form>
</div>
    </body>
    </html>