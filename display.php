<style type="text/css">
table
{
   	border-collapse: collapse;
   	border-spacing: 0;
   	width: 100%;    
}

.bordered 
{
   	border: solid #ccc 1px;
}
table, th, td
{
   	border: 1px solid black;
}
</style>

<?php include_once('access2.php');
error_reporting(E_ALL ^ E_NOTICE);
	if($_POST['textbox_inp1']!==null && $_POST['date_inp1']!==null && $_POST['usr_time']!==null)
	{
		$text_input = $_POST['textbox_inp1'];
		$date_input = $_POST['date_inp1'];
		$time_input = $_POST['usr_time'];
	
	$insert_values = "INSERT INTO todotabel(Data,DOT,time) VALUES('$text_input','$date_input','$time_input')";
	if ($conn->query($insert_values) === TRUE) 
		{
   
		} 
	else 
		{
    		echo "Error: " . $insert_values . "<br>" . $con->error;
		}
		
	}
$display="SELECT * FROM todotabel";
$display_2 = mysqli_query($conn,$display);
?>
<html>
<head>
<title> To-Do</title>
</head>
<body>
<h1>To-Do</h1>
</body>
<table> 
<form name="Data" action="action2.php" method="post">
<input type="submit" value="Delete" name="delete_multi" />
<?php 
	if(mysqli_num_rows($display_2)>0)
	{
		while($row=mysqli_fetch_assoc($display_2))
		{
			?>
			<tabel>
			<tr>
				<td><input type="checkbox" name="checked_id[]" value="<?php echo $row['id']; ?>" /> </td>
				<td width="750"><?php echo $row['Data']; ?></td>
				<td><?php echo $row['DOT']; ?></td>
				<td><?php echo $row['time']; ?></td>
			</tr>
		<?php
		}
	}
	else
	{
		?>
		<tr><td>No Records found</td></tr>
		<?php 
	}
		?>
		</table>
	</form>
<body>
<p class="paragraph">
<form name="Inp" action="display.php" method="post">

What are you about to do?<br>
<textarea type="textarea" cols="40" rows="5" style="width:500px; height:50px;" name="textbox_inp1"></textarea><br><br>
When are u about to do?<br><br>
<input type="date" name="date_inp1">
<input type="time" name="usr_time">
<input type="submit" value="Add">
</form>
</p>
</body>
</html>

