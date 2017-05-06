<?php
session_start();


if (isset($_POST['btn'])) 
{
if(isset($_POST['login']))
{
$as=$_POST['login'];

  //  Displaying Selected Value
}
}

if($as=='value1')
{
$username=$_POST["user"];
$user_pass=$_POST["pass"];
$db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
$qry="select * from login_details where Login_Id like '$username' AND Type='ADMIN'";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0)
{
	$qry1="select * from login_details where Login_Id like '$username' and Password like '$user_pass'";
$result1=mysqli_query($conn,$qry1);
while ($temp=mysqli_fetch_row($result1))
{
$user_name=$temp[8];
$_SESSION["username"]=$user_name;
echo $_SESSION["username"]."<br>";
}
if(mysqli_num_rows($result1)>0)
{ 
    header("Location:selectadmin.php"); 
}	
else{
	echo '<script language="javascript">';
	echo 'alert("ENTER VALID PASSWORD!!")';
	echo '</script>';
	header("location:main.php");
	
}
}
else
{
echo '<script language="javascript">';
echo 'alert("admin login not success!!")';
echo '</script>';
header("location:main.php");
	//echo "admin login not success!!";
}
}
else if($as=='value2')
{
$username=$_POST["user"];
$user_pass=$_POST["pass"];
$db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
$qry="select * from  login_details where Login_Id like '$username' AND Type='OFFICIAL'";
$result=mysqli_query($conn,$qry);
if(mysqli_num_rows($result)>0)
{
	$qry1="select * from login_details where Login_Id like '$username' and Password like '$user_pass'";
$result1=mysqli_query($conn,$qry1);

while ($temp=mysqli_fetch_row($result1))
{
$user_name=$temp[8];
$_SESSION["username"]=$user_name;
echo $_SESSION["username"]."<br>";
}

if(mysqli_num_rows($result1)>0)
{
    header("Location:SELECTOFFICIAL.php"); 
}	
else{
	echo '<script language="javascript">';
	echo 'alert("ENTER VALID PASSWORD!!")';
	echo '</script>';
	header("Location:main.php");
	
}
}
else
{
echo '<script language="javascript">';
echo 'alert("admin login not success!!")';
echo '</script>';
header("Location:main.php");
	//echo "off login not success!!";
}
}
else
{
	echo "sorry";
	header("Location:main.php");
}




?>