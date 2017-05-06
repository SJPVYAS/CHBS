<?php
$servername = "localhost";
$username = "";
$password="";
$dbname="conference_hall_data";
$con = mysqli_connect($servername, $username, $password, $dbname);
$name=$_POST["name"];
echo"<br/>";
$email=$_POST["email"] ;
echo"<br/>";
$mobile_no=$_POST["mobile_no"] ;
echo"<br/>";
$msg=$_POST["msg"] ;
$sql="INSERT INTO `feedback`(`name`, `email`, `mobile no`, `message`) VALUES ('$name','$email','$mobile_no','$msg')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo "hello";
}
?>