<html>
<head><title>Get Conference Hall</title>
<?php include "boothead.php";?>
<link href="bootcolor.css" rel="stylesheet" type="text/css" />
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
$query="SELECT * FROM `conference hall`";
$result=mysqli_query($conn,$query);
if($result)
{
if(mysqli_num_rows($result)>0)
{   
    echo '<div class=container><div class="jumbotron">';
	 echo '<table border="2" align="center" cellspacing="2" cellpadding="2" bordercolor="black"	>
         <tr><th>Conference_Id</th><th>State</th><th>City</th><th>Conference Name</th><th>Capacity</th></tr>';
	while($rows=mysqli_fetch_assoc($result))
	{    
		echo '<tr>
		<td>'.$rows['confhall_id'].'</td>
		<td>'.$rows['state_name'].'</td>
  		<td>'.$rows['city_name'].'</td>
		<td>'.$rows['confhall_name'].'</td>
		<td>'.$rows['capacity'].'</td>
		</tr>'
		;
	}
	echo '</table>';
echo '</div></div>';
	}
}
else
{
	echo "something went wrong";
}
?> 
<

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