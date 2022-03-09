<html>  
    <head>
    <style>
h1 {text-align: center;}

</style>
    </head>  
    <h1>Football Management System Reports Page</h1>

   <body>
    <div align="center">
    <form method="POST" action="reports.php">
    Players : 
    <?php 
    include('conn.php');
    $optionData1 =  "<option id ='0'>Select Player</option>";
    $optionData2 =  "<option id ='0'>Select Competition</option>";
    $optionData3 =  "<option id ='0'>Select Teams</option>";
    $optionData4 =  "<option id ='0'>Select Email</option>";
        	$query=mysqli_query($conn,"select * from `Players`");
        	while($row=mysqli_fetch_array($query)){
            $optionData1 .= "<option value=".$row['fullname'].">".$row['fullname']."</option>";
        			}
    			?>
  
    <select name="fullname" id="fullname">
                <pre><?php echo $optionData1;?></pre>
                </select>

    <br><br>
    <input type="submit" name="add" value="Submit">
    <br><br>
    Teams :
    <?php 
            $query=mysqli_query($conn,"select * from `Teams`");
        	while($row=mysqli_fetch_array($query)){
            $optionData3 .= "<option value=".$row['team_name'].">".$row['team_name']."</option>";
        			}
    			?>
  
    <select name="team_name" id="team_name">
                <pre><?php echo $optionData3;?></pre>
                </select>

    <br><br>
    <input type="submit" name="add" value="Submit">
    <br><br>
    Competitions :
    <?php 
            $query=mysqli_query($conn,"select * from `Competition`");
        	while($row=mysqli_fetch_array($query)){
            $optionData2 .= "<option value=".$row['comp_name'].">".$row['comp_name']."</option>";
        			}
    			?>
  
    <select name="comp_name" id="comp_name">
                <pre><?php echo $optionData2;?></pre>
                </select>

    <br><br>
    <input type="submit" name="add" value="Submit">
    <br><br>
    Team Email:
    <?php 
            $query=mysqli_query($conn,"select * from `Teams`");
        	while($row=mysqli_fetch_array($query)){
            $optionData4 .= "<option value=".$row['Email'].">".$row['Email']."</option>";
        			}
    			?>
  
    <select name="Email" id="Email">
                <pre><?php echo $optionData4;?></pre>
                </select>
     
        <br><br>
    <input type="submit" name="add" value="Email Fixtures">
    </form>
    </div>  
    </body>  
<html>  