<?php
if (isset($_POST['submit']))
{
	
$db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
	$from_date=$_POST['from_date'];
	$to_date=$_POST['to_date'];
	qry="SELECT * FROM `booking_data` WHERE  `date`>= '$from_date' AND `date`<='to_date'";
	$res=mysqli_query($conn,$qry);
$result = array();

while($row = mysqli_fetch_array($res)){
array_push($result,
array('id'=>$c,
'conf_id'=>$row[0],
'State'=>$row[1],
'City'=>$row[2],
'Conf_Name'=>$row[3],
'Capacity'=>$row[4],
));
$c++;
}
 
echo json_encode(array("result"=>$result));
mysqli_close($con);
