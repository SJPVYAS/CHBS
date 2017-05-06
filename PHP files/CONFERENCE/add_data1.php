<?php
 $db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$con = mysqli_connect($servername, $user, $password, $db_name);
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$capacity=$_POST['capacity'];
$confh_name=$_POST['conf_hall_name'];
$sql1="select name from `cities` where state_id=$state and cities.id=$city ";
$result1=mysqli_query($con,$sql1);
while ($row=mysqli_fetch_row($result1))
{
$city1=$row[0];

}
$sql2="select * from `states` where states.id=$state";
$result2=mysqli_query($con,$sql2);
while ($r=mysqli_fetch_row($result2))
{
$state1=$r[1];
}

$sql3="INSERT INTO `conference hall`(`confhall_id`, `confhall_name`, `state_id`, `city_id`, `capacity`, `state_name`, `city_name`) VALUES (NULL,'$confh_name','$state','$city','$capacity','$state1','$city1')";
$result3=mysqli_query($con,$sql3);

 if($result3)
{
	echo '<script language="javascript">';
echo 'alert("INSERTED!!")';
echo '</script>';

}


?>