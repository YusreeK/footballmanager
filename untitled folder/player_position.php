<!DOCTYPE html>
    <html>
    <head>
	<style>
h1 {text-align: center;}
p {text-align: center;}
</style>
    <title>Player Position</title>
    </head>
	<h1>Competitions</h1>
 <p> <a href="index.php">Home</a></p>
    <body>

    	<br>
    	<div>
    		<table align="center" border="1" width="50%">
    			<thead>
    				<th>Competitions</th>
					<th>Action</th>
    			</thead>
    			<tbody>
    				<?php
    					include('conn.php');
    					$query=mysqli_query($conn,"select * from `Position`");
    					while($row=mysqli_fetch_array($query)){
    						?>
    						<tr>
    							<td><?php echo $row['position_descr']; ?></td>
    							<td>
    								<a href="edit_position.php?id=<?php echo $row['position_id']; ?>">Edit</a>
    								<a href="delete_position.php?id=<?php echo $row['position_id']; ?>">Delete</a>
    							</td>
    						</tr>
    						<?php
    					}
    				?>
    			</tbody>
    		</table>
    	</div>
		<br>
		<div align="center">
    		<form method="POST" action="add_position.php">
    			<label>Add Position:</label><input type="text" name="position_descr">
    			<br><br>
    			<input type="submit" name="submit" value="Submit">
    		</form>
    	</div>
    </body>
    </html>