<?php
  define('HOST','mysql.hostinger.in');
  define('USER','u113734790_user');
  define('PASS','satyam');
  define('DB','u113734790_db');
  $con = mysqli_connect(HOST,USER,PASS,DB);
 	$from_date=$_POST['from_date'];
	$to_date=$_POST['to_date'];
	qry="SELECT * FROM `booking_data` WHERE  `date`>= '$from_date' AND `date`<='to_date'";
	$res=mysqli_query($conn,$qry);
if($result)
{
if(mysqli_num_rows($result)>0)
{   echo '<table border="2" align="center" cel													lspacing="10" cellpadding="10">
          <tr><th>Book_Id</th><th>Ministry</th><th>State</th><th>City</th><th>Login_Id</th>
		  <th>Capacity</th><th>Conference Name</th><th>Date</th><th>Entry_Time<th>Exit_Time</th><th>Subject</th></tr>';
	while($row=mysqli_fetch_assoc($result))
	{    
		echo '<tr>
		<td>'.$row['booking_id'].'</td>
		<td>'.$row['ministry_name'].'</td>
		<td>'.$row['state_name'].'</td>
		<td>'.$row['city_name'].'</td>
  		<td>'.$row['Login_Id'].'</td>
		<td>'.$row['capacity'].'</td>
		<td>'.$row['conference_name'].'</td>
		<td>'.$row['date'].'</td>
		<td>'.$row['entry_time'].'</td>
		<td>'.$row['exit_time'].'</td>
		<td>'.$row['subject'].'</td>a
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