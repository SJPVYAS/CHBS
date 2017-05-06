<?php
if (isset($_POST['submit']))
{
	
$db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$KEY="ADITEE";
$conn = mysqli_connect($servername, $user, $password, $db_name);
	$off_name=$_POST['off_name'];
	$department=$_POST['department'];
	$d_o_j=$_POST['d_o_j'];
	$email=$_POST['email'];
	$mob=$_POST['mob'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$log_id=$_POST['log_id'];
	$pswrd=$_POST['pswrd'];
	$pass= md5('$pswrd');
    $qry="INSERT INTO `login_details` (`Official_Id`, `Name`, `Ministry`,  `Email_Id`, `Mobile_No.`, `Age`, `Address`, `Date_Of_Joining`,`Login_Id`, `Password`,`Type`) VALUES 
	(NULL, '$off_name', '$department', '$email', '$mob', '$age', '$address', '$d_o_j', '$log_id', '$pass','OFFICIAL')";
     $result=mysqli_query($conn,$qry);
     echo "i am here";	 
	if($result)
	 {
	 echo '<script language="javascript">';
echo 'alert("INSERTED!!")';
echo '</script>';
	 }
	}
?>
