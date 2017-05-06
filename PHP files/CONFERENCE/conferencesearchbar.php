<?php
$db_name="conference hall data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
$query = $_POST['search']; 
$qry="SELECT * FROM `conference data` WHERE (`conf_Id` LIKE '%{$query}%') OR (`State_Name` LIKE '%{$query}%') OR (`City_Name` LIKE '%{$query}%') OR (`Conf_Name` LIKE '%{$query}%') OR (`Capacity` LIKE '%{$query}%') ";
$result=mysqli_query($conn,$qry);

if($result)
{
if(mysqli_num_rows($result)>0)
{    echo '<table border="2" align="center" cellspacing="10" cellpadding="10">
     <tr><th>conf_Id</th><th>State_Name</th><th>City_Name</th><th>Conf_Name</th><th>Capacity</th></tr>';
	while($row=mysqli_fetch_assoc($result))
	{       
		echo 
		'<tr>
		<td>'.$row['conf_Id'].'</td>
		<td>'.$row['State_Name'].'</td>
  		<td>'.$row['City_Name'].'</td>
		<td>'.$row['Conf_Name'].'</td>
		<td>'.$row['Capacity'].'</td>
		</tr>';
	}
	echo '</table>';
}

else
{
	echo "Nothing Matched";
}
}
mysqli_close($conn);
?>