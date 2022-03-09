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
                <th><a href='?order=fullname&&sort=$sort'>Player</a></th>
                <th><a href='?order=team_name&&sort=$sort'>Team</a></th>
                    <th>Shirt Number</th>
    				<th>Position</th>
					<th>Action</th>
    			</thead>
    			<tbody>
    				<?php
    					include('conn.php');
                        $optionData1 =  '<option id ="0">Select Team</option>';
    					$query=mysqli_query ($conn,"SELECT * FROM `Players` ORDER BY `Players`.`fullname` ASC;");
                        $query=mysqli_query ($conn,"SELECT * FROM `Players` ORDER BY `Players`.`fullname` DESC;");
    					while($row=mysqli_fetch_array($query)){
    						?>
    						<tr>
    							<td><?php echo $row['fullname']; ?></td>
    							<td><?php echo $row['team_name']; ?></td>
                                <td><?php echo $row['player_sqd_num']; ?></td>
    							<td><?php echo $row['position_descr']; ?></td>
    							<td>
    								<a href="edit_players.php?id=<?php echo $row['player_id']; ?>">Edit</a>
    								<a href="delete_players.php?id=<?php echo $row['player_id']; ?>">Delete</a>
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
            Add Player
            <br><br>
    		<form method="POST" action="add_players.php">
    			<label>Player:</label><input type="text" name="fullname"><br><br>
                <?php 
        			$query=mysqli_query($conn,"SELECT * FROM `Teams` ORDER BY `Teams`.`team_name` ASC;");
        			while($row=mysqli_fetch_array($query)){
					$optionData1 .= "<option value=".$row['team_name'].">".$row['team_name']."</option>";
        			}
    			?>
                Select Team <select name="team_name" id="team_name">
                <pre><?php echo $optionData1;?></pre>
                </select>
                <br><br>
                <label>Shirt Number:</label><input type="text" name="player_sqd_num">
                <br><br>
                Select Position:
                <br><br>
                    <table border="1">
                        <tr rowspan="2">
                            <td><input type="radio" name="position_descr" value="GK" />GK</td>
                            <td><input type="radio" name="position_descr" value="CB" />CB</td>
                            </tr>
                            <tr rowspan="2">
                            <td><input type="radio" name="position_descr" value="LB" />LB</td>
                            <td><input type="radio" name="position_descr" value="FB" />FB</td>
                            </tr>
                            <tr rowspan="2">
                            <td><input type="radio" name="position_descr" value="LWB" />LWB</td>
                            <td><input type="radio" name="position_descr" value="RWB" />RWB</td>
                            </tr>
                            <tr rowspan="2">
                            <td><input type="radio" name="position_descr" value="SW" />SW</td>
                            <td><input type="radio" name="position_descr" value="DM" />DM</td>
                            </tr>
                            <tr rowspan="2">
                            <td><input type="radio" name="position_descr" value="CM" />CM</td>
                            <td><input type="radio" name="position_descr" value="AM" />AM</td>
                            </tr>
                            <tr rowspan="2">
                            <td><input type="radio" name="position_descr" value="LW" />LW</td>
                            <td><input type="radio" name="position_descr" value="RW" />RW</td>
                            </tr>
                            <tr rowspan="2">
                            <td><input type="radio" name="position_descr" value="CF" />CF</td>
                            <td><input type="radio" name="position_descr" value="WF" />WF</td>
                        </tr>
                        </table>
                        <br><br>
    			<input type="submit" name="add" value="Submit">
    		</form>
    	</div>
    </body>
    </html>