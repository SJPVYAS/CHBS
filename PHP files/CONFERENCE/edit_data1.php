<?php
$conf_IdErr="";
$conf_Id="";
function test_input($data)
	 {
		 $data=trim($data);
		 $data=stripslashes($data);
		 $data=htmlspecialchars($data);
		 return $data;
	 }
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(empty($_POST["conf_Id"]))
		{
			$conf_IdErr="Conf_Id is required";
		}
		else
		{
			$name=test_input($_POST["conf_Id"]);
		}
	}
		
	
if (isset($_POST['chk1'])) 
{
	
	$conf_Id=$_POST["confhall_id"];
	$state=$_POST["txt1"];
$db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
$qry="UPDATE `conference hall` SET `state_name`='$state' where confhall_id='$conf_Id'" ;
$result=mysqli_query($conn,$qry);
if($result)
{

echo '<script language="javascript">';
echo 'alert("UPDATED!!")';
echo '</script>';    
}	
}
 

if (isset($_POST['chk2'])) 
{
	$conf_Id=$_POST["conf_Id"];
	$city=$_POST["txt2"];
$db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
$qry="UPDATE `conference hall` SET `city_name`='$city' where confhall_id='$conf_Id'" ;
$result=mysqli_query($conn,$qry);
if($result)
{
echo '<script language="javascript">';
echo 'alert("UPDATED!!")';
echo '</script>';    
}	
}


if (isset($_POST['chk3'])) 
{
	$conf_Id=$_POST["conf_Id"];
	$conf_name=$_POST["txt3"];
$db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
$qry="UPDATE `conference hall` SET `conference_name`='$conf_name' where conference_id='$conf_Id'" ;
$result=mysqli_query($conn,$qry);
if($result)

{
echo '<script language="javascript">';
echo 'alert("UPDATED!!")';
echo '</script>';    
}	
}


if (isset($_POST['chk4'])) 
{
	$conf_Id=$_POST["conf_Id"];
	$capacity=$_POST["txt4"];
$db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
$qry="UPDATE `conference hall` SET `capacity`='$capacity' where conference_id='$conf_Id'" ;
$result=mysqli_query($conn,$qry);
if($result)
{
echo '<script language="javascript">';
echo 'alert("UPDATED!!")';
echo '</script>';    
}	
}


?>