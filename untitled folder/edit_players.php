<?php
    	include('conn.php');
        $optionData1 =  '<option id ="0">Select Team</option>';
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `Players` where player_id='$id'");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Basic MySQLi Commands</title>
    </head>
    <body>
    	<h2>Edit</h2>
    	<form method="POST" action="update_players.php?id=<?php echo $id; ?>">
    		<label>Player:</label><input type="text" value="<?php echo $row['fullname']; ?>" name="fullname">
            <br><br>
    		<?php 
        			$query=mysqli_query($conn,"select * from `Teams`");
        			while($row=mysqli_fetch_array($query)){
					$optionData1 .= "<option value=".$row['team_name'].">".$row['team_name']."</option>";
        			}
    			?>
                Select Team <select name="team_name" id="team_name">
                <pre><?php echo $optionData1;?></pre>
                </select>
                <br><br>
                <label>Shirt Number:</label><input type="text" value="<?php echo $row['player_sqd_num']; ?>" name="player_sqd_num">
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
    		<input type="submit" name="submit" value="submit">
    		<a href="players.php">Back</a>
    	</form>
    </body>
    </html>