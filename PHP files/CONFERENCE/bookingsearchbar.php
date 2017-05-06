
<?php
  define('HOST','mysql.hostinger.in');
  define('USER','u113734790_user');
  define('PASS','satyam');
  define('DB','u113734790_db');
  $con = mysqli_connect(HOST,USER,PASS,DB);
$query = $_POST['search']; 
function test_input($query)
	 {
		 $data=trim($query);
		 $data=stripslashes($query);
		 $data=htmlspecialchars($query);
		 return $query;
	 }
$qry="SELECT * FROM `official_login_details` WHERE (`Official_Id` LIKE '%{$query}%') OR (`Name` LIKE '%{$query}%') OR (`Department` LIKE '%{$query}%') OR (`Date_Of_Joining` LIKE '%{$query}%') OR (`Email_Id` LIKE '%{$query}%') OR (`Mobile_No.` LIKE '%{$query}%') OR (`Age` LIKE '%{$query}%') OR (`Address` LIKE '%{$query}%') OR (`Login_Id` LIKE '%{$query}%') OR (`Password` LIKE '%{$query}%')";
$res=mysqli_query($con,$qry);

if($result)
{
if(mysqli_num_rows($result)>0)
{ 
$result = array();
$c=1;
	while($row=mysqli_fetch_assoc($res))
	{       
		array_push($result,
array('id'=>$c,
'Book_id'=>$row[0],
'Ministry'=>$row[1],
'Department'=>$row[2],
'State'=>$row[3],
'City'=>$row[4],
'Conf_Name'=>$row[5],
'Date'=>$row[6],
'Start_time'=>$row[7],
'End_time'=>$row[8],
'Conf_id'=>$row[9],
'User_id'=>$row[10],
'no_of_persons'=>$row[11],
));
$c++;
echo json_encode(array("result"=>$result));
	}
}

else
{
	echo "Nothing Matched";
}
}
mysqli_close($con);
?>