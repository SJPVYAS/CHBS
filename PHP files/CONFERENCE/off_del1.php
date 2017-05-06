<?php
$off_IdErr="";
$off_Id="";
function test_input($data)
	 {
		 $data=trim($data);
		 $data=stripslashes($data);
		 $data=htmlspecialchars($data);
		 return $data;
	 }
	 if(empty($_POST["off_Id"]))
		{
			$off_IdErr="Official_Id is required";
		}
		else
		{
			$conf_Id=test_input($_POST["off_Id"]);
		}
if (isset($_POST['del']))
{
	if($off_Id)
	{
$db_name="conference hall data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
	$off_Id=$_POST['off_Id'];
    $query="DELETE FROM `official_login_details` WHERE `Official_Id` = $off_Id";
    $result=mysqli_query($conn,$query);
if($result)
{    
echo '<script language="javascript">';
echo 'alert("DELETED!!")';
echo '</script>';
}
	}
}

?>