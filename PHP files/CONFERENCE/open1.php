 
 <?php  
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('conference_hall_data');
 ?>
 <?php
 $k=$_GET['id'];
 $y=mysql_query("delete from booking_data where booking_id=$k");
 if($y!="")
 {
	 echo" your row is successfully  deleted";
 }else
	 echo"you can not delete row";
 ?>