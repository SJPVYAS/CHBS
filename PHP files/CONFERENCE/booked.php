
<?php
session_start();
 $db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$con = mysqli_connect($servername, $user, $password, $db_name);
$confhallid=$_POST['a'];
$a=$_SESSION["e_time"];

$b=$_SESSION["ex_time"];
$state=$_SESSION["state"];
$city=$_SESSION["city"];
$date=$_SESSION["sdate"];
$capacity=$_SESSION["capacity"];
$ministry=$_SESSION["ministry"];
$subject=$_POST['message'];
$sql1="select name from `cities` where state_id=$state and cities.id=$city ";
$result1=mysqli_query($con,$sql1);
while ($row=mysqli_fetch_row($result1))
{
$city1=$row[0];
//echo $city1."<br>";

}

$sql2="select * from `states` where states.id=$state";
$result2=mysqli_query($con,$sql2);
while ($r=mysqli_fetch_row($result2))
{
$state1=$r[1];
//echo $state1."<br>";
}

$sql3="select * from `conference hall` where confhall_id=$confhallid";
$result3=mysqli_query($con,$sql3);
while ($rs=mysqli_fetch_row($result3))
{
$confhall_name=$rs[1];
//echo $confhall_name."<br>";
}
$user_name=$_SESSION["username"];
//echo $user_name."<br>";
$sql4="select * from `login_details` where `Login_Id`='$user_name'";
$result4=mysqli_query($con,$sql4);
while ($rp=mysqli_fetch_row($result4))
{
$emailid=$rp[3];
//echo $id."<br>";
}

$sql5="INSERT INTO `booking_data`(`booking_id`, `ministry_name`, `Login_Id`, `capacity`, `confhall_id`, `conference_name`, `date`, `entry_time`, `exit_time`, `subject`, `state_name`, `city_name`, `state_id`, `city_id`)
VALUES (NULL,'$ministry','$user_name','$capacity','$confhallid','$confhall_name','$date','$a','$b','$subject','$state1','$city1','$state','$city')";
$result5=mysqli_query($con,$sql5);
$sql6="select * from `booking_data`";
$result6=mysqli_query($con,$sql6);
if($result6=mysqli_query($con,$sql6))
{

  $rowcount=mysqli_num_rows($result6);
    //printf("Result set has %d rows.\n",$rowcount);
//echo "hello";
}
if($result5)
{
//echo "data is inserted";


$sql7="select * from `booking_data` where booking_id=$rowcount";
$result7=mysqli_query($con
,$sql7);
while ($rs=mysqli_fetch_row($result7))
{ echo '<h1 align="center"> Booking Details</h1>';
echo '<table align="center" border="3px" height="80%" width="80%" >

<tr><th>ATTRIBUTES</th><th>VALUE</th></tr>
<tr><td align="center">Booking Id</td><td align="center">';echo $rs[0]; echo '</td></tr>
<tr><td align="center">Ministry Name</td><td align="center">';echo $rs[1];echo '</td></tr>
<tr><td align="center">Login Id</td><td align="center">';echo $rs[2]; echo '</td></tr>
<tr><td align="center">Capacity</td><td align="center">'; echo $rs[3]; echo '</td></tr>
<tr><td align="center">Conf.Hall Id</td><td align="center">'; echo $rs[4]; echo '</td></tr>
<tr><td align="center">Conference Name</td><td align="center">';echo $rs[5];echo '</td></tr>
<tr><td align="center">Date</td><td align="center">';echo $rs[6]; echo '</td></tr>
<tr><td align="center">Entry Time</td><td align="center">';echo $rs[7]; echo '</td></tr>
<tr><td align="center">Exit time</td><td align="center">';echo $rs[8];echo '</td></tr>
<tr><td align="center">Subeject</td><td align="center">';echo $rs[9];echo '</td></tr>
<tr><td align="center">Sate Name</td><td align="center">';echo $rs[10];echo '</td></tr>
<tr><td align="center">City Name</td><td align="center">';echo $rs[11];echo '</td></tr>
</table>';



}




/*$email = "YOUR BOOKING HAS BEEN DONE";
$subject = "CONFERENCE HALL BOOKING";
$comments = "GIVE US CHANCE TO SERVE YOU";
$to = $emailid;
$headers = "From: $name<adityashankhdhar94@gmail.com>";
echo $message = "Name: $name \n\nEmail: $email \n\n Subject: \n\n Message: $comments";
 if(mail($to,$subject,$message,$headers))
 {
  echo "mail sent";
  }
 else
  {
    echo "mail not sent";
    }*/
	
	
	
	
}

?>
<!DOCTYPE html>
<html>
<body>


<button onclick="myFunction()">Print Invoice</button>

<script>
function myFunction() {
    window.print();
}
</script>

</body>
</html>