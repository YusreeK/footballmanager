<!DOCTYPE html>
    <html>
    <head>
	<style>
h1 {text-align: center;}
p {text-align: center;}
</style>
    <title>Fixtures</title>
	<h1>Fixtures</h1>
	<p> <a href="index.php">Home</a></p>
    </head>
    <body>
    	<div>
    		<table align="center" border="1" width="50%">
    			<thead>
    				<th>Fixture</th>
    				<th>Date</th>
                    <th>Time</th>
    				<th>Home Team</th>
                    <th>Away Team</th>
    				<th>Competition</th>
					<th>Action</th>
    			</thead>
    			<tbody>
    				<?php
                        
    					include('conn.php');
						$optionData1 =  "<option id ='0'>Select Team</option>";
						$optionData2 =  "<option id ='0'>Select Competition</option>";
    					$query=mysqli_query($conn,"select * from `Fixtures`");
    					while($row=mysqli_fetch_array($query)){
                            
    						?>
    						<tr>
    							<td><?php echo $row['fixture_id']; ?></td>
    							<td><?php echo $row['fixture_date']; ?></td>
                                <td><?php echo $row['fixture_time']; ?></td>
    							<td><?php echo $row['team_name']; ?></td>
                                <td><?php echo $row['team_name1']; ?></td>
    							<td><?php echo $row['comp_name']; ?></td>
    							<td>
    								<a href="edit_fixtures.php?id=<?php echo $row['fixture_id']; ?>">Edit</a>
    								<a href="delete_fixtures.php?id=<?php echo $row['fixture_id']; ?>">Delete</a>
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
            
    		<form method="POST" action="add_fixtures.php">
    			<label>Add Date:</label><input type="text" name="fixture_date">
				<br><br>
                <label>Add Time:</label><input type="text" name="fixture_time">
    			<br><br>
				<?php 
        			$query=mysqli_query($conn,"select * from `Teams`");
        			while($row=mysqli_fetch_array($query)){
					$optionData1 .= "<option value=".$row['team_name'].">".$row['team_name']."</option>";
        			}
    			?>
                Select Home Team <select name="team_name" id="team_name">
                <pre><?php echo $optionData1;?></pre>
                </select>
                <br><br>
                Select Away Team <select name="team_name1"  id="team_name1">
                <pre><?php echo $optionData1;?></pre>
                </select>
                <br><br>
				<?php
    				$query=mysqli_query($conn,"select * from `Competition`");
    				while($row=mysqli_fetch_array($query)){
					$optionData2 .= "<option value=".$row['comp_name'].">".$row['comp_name']."</option>";
    				}
    			?>
                Select Competition <select name="comp_name"  id="comp_name">
                <pre><?php echo $optionData2;?></pre>
                </select>
                <br><br>
    			<input type="submit" name="submit" value="Submit">
    		</form>
            
    	</div>
    </body>
    </html>