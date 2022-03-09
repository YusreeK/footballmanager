<!DOCTYPE html>
    <html>
    <head>
    <title>Basic MySQLi Commands</title>
    </head>
    <body>
    	<br>
    	<div>
    		<table border="1" width="50%">
    			<thead>
    				<th>Player</th>
    				<th>Competition</th>
                    <th>Goals Scored</th>
					<th>Action</th>
    			</thead>
    			<tbody>
    				<?php
    					include('conn.php');
                        $optionData1 =  "<option id ='0'>Select Player</option>";
                        $optionData2 =  "<option id ='0'>Select Competition</option>";
    					$query=mysqli_query($conn,"select * from `Player_fixtures`");
    					while($row=mysqli_fetch_array($query)){
    						?>
    						<tr>
    							<td><?php echo $row['fullname']; ?></td>
                                <td><?php echo $row['comp_name']; ?></td>
                                <td><?php echo $row['goals_scored']; ?></td>
    							<td>
    								<a href="edit_player_fixtures.php?id=<?php echo $row['pf_id']; ?>">Edit</a>
    								<a href="delete_player_fixtures.php?id=<?php echo $row['pf_id']; ?>">Delete</a>
    							</td>
    						</tr>
    						<?php
    					}
    				?>
    			</tbody>
    		</table>
    	</div>
        <br><br>
        <div>

            <form method="POST" action="add_player_fixtures.php">
    			
                <?php 
        			$query=mysqli_query($conn,"select * from `Players`");
        			while($row=mysqli_fetch_array($query)){
					$optionData1 .= "<option value=".$row['fullname'].">".$row['fullname']."</option>";
        			}
    			?>
                Select Player <select name="fullname" id="fullname">
                <pre><?php echo $optionData1;?></pre>
                </select>
                <br><br>
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
    			<label>Goal Scored:</label><input type="text" name="goals_scored">
                <br><br>
    			<input type="submit" name="add" value="submit">
    		</form>
    	</div>
    	<br>
    </body>
    </html>