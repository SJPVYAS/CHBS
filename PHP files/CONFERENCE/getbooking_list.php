 <html>
 <head><title>
 Booking List
 </title>
 <?php include "boothead.php";?>

 </head>
 <body>
 <?php include "bootmenubar1.php";?>
 <br><br>
 <?php
$db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
$qry="SELECT * FROM `booking_data`";
$result=mysqli_query($conn,$qry);
if($result)
{
if(mysqli_num_rows($result)>0)
{   echo '<table border="4"  bordercolor="BLUE"  align="center" cellspacing="6" cellpadding="8">
          <tr><th>Book_Id</th><th><center>Ministry</th><th>State</th><th>City</th><th>Login_Id</th>
		  <th>Capacity</th><th>Conference Name</th><th>Date</th><th>Entry_Time<th>Exit_Time</th><th>Subject</th></tr>';
	while($row=mysqli_fetch_assoc($result))
	{    
		echo '<tr>
		<td  align="center">'.$row['booking_id'].'</td>
		<td align="center">'.$row['ministry_name'].'</td>
		<td align="center">'.$row['state_name'].'</td>
		<td align="center">'.$row['city_name'].'</td>
  		<td align="center">'.$row['Login_Id'].'</td>
		<td align="center">'.$row['capacity'].'</td>
		<td align="center">'.$row['conference_name'].'</td>
		<td align="center">'.$row['date'].'</td>
		<td align="center">'.$row['entry_time'].'</td>
		<td align="center">'.$row['exit_time'].'</td>
		<td align="center">'.$row['subject'].'</td>
		</tr>';
	}
	echo '</table>';
}
}
else
{
	echo "SOMETHING WENT WRONG";
	
}

?>
<!DOCTYPE html>
<html>
<body>

<BR><BR>
<button ALIGN="CENTER" onclick="myFunction()">Print DETAILS</button>
<BR><BR>
<script>
function myFunction() {
    window.print();
}
</script>

</body>
</html>