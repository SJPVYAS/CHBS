<?php
$db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
$qry="SELECT * FROM `login_details` where type='OFFICIAL'";
$result=mysqli_query($conn,$qry);
if($result)
{
if(mysqli_num_rows($result)>0)
{    echo '<table border="2" align="center" cellspacing="10" cellpadding="10">
     <tr><th>Official_Id</th><th>Name</th><th>Ministry</th><th>Email_Id</th><th>Mobile_No.</th><th>Age</th><th>Address</th><th>Date_Of_Joining</th></tr>';
	while($row=mysqli_fetch_assoc($result))
	{       
		echo '
		<tr>
		<td>'.$row['Official_Id'].'</td>
		<td>'.$row['Name'].'</td>
  		<td>'.$row['Ministry'].'</td>
		<td>'.$row['Email_Id'].'</td>
		<td>'.$row['Mobile_No.'].'</td>
		<td>'.$row['Age'].'</td>
		<td>'.$row['Address'].'</td>
		<td>'.$row['Date_of_Joining'].'</td>
		</tr>';
	}
	echo '</table>';
}
}
else
{
	echo "Something went wrong";
}
mysqli_close($conn);
?>