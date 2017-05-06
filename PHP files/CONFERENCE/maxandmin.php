<?php
  define('HOST','mysql.hostinger.in');
  define('USER','u113734790_user');
  define('PASS','satyam');
  define('DB','u113734790_db');
  $con = mysqli_connect(HOST,USER,PASS,DB);
 
$sql = "select confhall_id, conference_name from conference hall where confhall_id = ( select max(confhall_id) from conference hall )
union all
select confhall_id, conference_name from conference hall where confhall_id = ( select min(confhall_id) from conference hall )";
$res = mysqli_query($con,$sql);
 
$result = array();
$c=1;
while($row = mysqli_fetch_array($res)){
array_push($result,
array('id'=>$c,
'confhall_id'=>$row[0],
'State'=>$row[1],
'City'=>$row[2],
'Conf_Name'=>$row[3],
'Capacity'=>$row[4],
));
$c++;
}
 
echo json_encode(array("result"=>$result));
mysqli_close($con);
?>