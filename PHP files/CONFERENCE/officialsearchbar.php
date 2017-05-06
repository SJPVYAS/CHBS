<?php
$db_name="conference hall data";
$servername = "localhost";
$user = "root";
$password = "";

$conn = mysqli_connect($servername, $user, $password, $db_name);
$query = $_POST['search']; 
function test_input($query)
	 {
		 $data=trim($query);
		 $data=stripslashes($query);
		 $data=htmlspecialchars($query);
		 return $query;
	 }
$qry="SELECT * FROM `official_login_details` WHERE (`Official_Id` LIKE '%{$query}%') OR (`Name` LIKE '%{$query}%') OR (`Department` LIKE '%{$query}%') OR (`Date_Of_Joining` LIKE '%{$query}%') OR (`Email_Id` LIKE '%{$query}%') OR (`Mobile_No.` LIKE '%{$query}%') OR (`Age` LIKE '%{$query}%') OR (`Address` LIKE '%{$query}%') OR (`Login_Id` LIKE '%{$query}%') OR (`Password` LIKE '%{$query}%')";
$result=mysqli_query($conn,$qry);

if($result)
{
if(mysqli_num_rows($result)>0)
{    echo '<table border="2" align="center" cellspacing="10" cellpadding="10">
     <tr><th>Official_Id</th><th>Name</th><th>Department</th><th>Date_Of_Joining</th><th>Email_Id</th><th>Mobile_No.</th><th>Age</th><th>Address</th><th>Login_Id</th><th>Password</th></tr>';
	while($row=mysqli_fetch_assoc($result))
	{       
		echo 
		'<tr>
		<td>'.$row['Official_Id'].'</td>
		<td>'.$row['Name'].'</td>
  		<td>'.$row['Department'].'</td>
		<td>'.$row['Date_Of_Joining'].'</td>
		<td>'.$row['Email_Id'].'</td>
		<td>'.$row['Mobile_No.'].'</td>
		<td>'.$row['Age'].'</td>
		<td>'.$row['Address'].'</td>
		<td>'.$row['Login_Id'].'</td>
		<td>'.$row['Password'].'</td>

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