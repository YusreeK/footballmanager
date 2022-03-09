<!DOCTYPE html>
    <html>
    <head>
	<style>
h1 {text-align: center;}
p {text-align: center;}
</style>
    <title>Teams</title>
	<h1>Teams</h1>
	<p> <a href="index.php">Home</a></p>
    </head>
    <body>
    	<div>
    		<table align="center" border="1" width="50%">
    			<thead>
    				<th>Team</th>
    				<th>Team Email</th>
					<th>Action</th>
    			</thead>
    			<tbody>
    				<?php
    					include('conn.php');
    					$query=mysqli_query($conn,"select * from `Teams`");
    					while($row=mysqli_fetch_array($query)){
    						?>
    						<tr>
    							<td><?php echo $row['team_name']; ?></td>
    							<td><?php echo $row['Email']; ?></td>
    							<td>
    								<a href="edit_teams.php?id=<?php echo $row['team_id']; ?>">Edit</a>
    								<a href="delete_teams.php?id=<?php echo $row['team_id']; ?>">Delete</a>
    							</td>
    						</tr>
    						<?php
    					}
    				?>
    			</tbody>
    		</table>
    	</div>
        <br><br>
        <div align="center">
    		<form method="POST" action="add_teams.php">
    			<label>Add Team Name:</label><input type="text" name="team_name">
				<br><br>
                <label>Add Team Email:</label><input type="text" name="Email">
    			<br><br>
    			<input type="submit" name="submit" value="Submit">
    		</form>
    	</div>
    </body>
    </html>