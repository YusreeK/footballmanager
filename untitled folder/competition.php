<!DOCTYPE html>
    <html>
    <head>
    <title>Basic MySQLi Commands</title>
	<style>
h1 {text-align: center;}
p {text-align: center;}
</style>
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
    					$query=mysqli_query($conn,"select * from `Competition`");
    					while($row=mysqli_fetch_array($query)){
    						?>
    						<tr>
    							<td><?php echo $row['comp_name']; ?></td>
    							<td>
    								<a href="edit_competition.php?id=<?php echo $row['comp_id']; ?>">Edit</a>
    								<a href="delete_competition.php?id=<?php echo $row['comp_id']; ?>">Delete</a>
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
    		<form method="POST" action="add_competition.php">
    			<label>Add Competition:</label><input type="text" name="comp_name">
    			<br><br>
    			<input type="submit" name="submit" value="Submit">
    		</form>
    	</div>
    </body>
    </html>