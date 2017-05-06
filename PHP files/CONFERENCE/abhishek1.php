
<?php  
$con=mysql_connect('localhost','root','');
$db=mysql_select_db('conference_hall_data');
 ?>

<?php
$x=mysql_query("select * from booking_data WHERE Login_Id=");
while($z=mysql_fetch_array($x))
{
 	?>
<table border="1" bgcolor="
">	<tr><th>booking_id</th><th>ministry name</th><th>login id</th><th>capacity</th><th>confhall_id</th><th>conference_name</th>
<th>date</th><th>entry time</th><th>exit time</th>	<th>subject</th><th>state name</th><th>city name</th><th>state_id</th><th>city_id</th><th>cancel</th></tr>
<tr><td><?php echo $z["booking_id"];?></td>
<td><?php echo $z["ministry_name"];?></td>
<td><?php echo $z["Login_Id"];?></td>
<td><?php echo $z["capacity"];?></td>
<td><?php echo $z["confhall_id"];?></td>
<td><?php echo $z["conference_name"];?></td>
<td><?php echo $z["date"];?></td>
<td><?php echo $z["entry_time"];?></td>
<td><?php echo $z["exit_time"];?></td>
<td><?php echo $z["subject"];?></td>
<td><?php echo $z["state_name"];?></td>
<td><?php echo $z["city_name"];?></td>
<td><?php echo $z["state_id"];?></td>
<td><?php echo $z["city_id"];?></td>
<td><?php $r=$z["booking_id"];?> <form action="open1.php" method="get"><button type="submit" name="id" value='<?php echo $r;?>'>Submit</button>
</form>'</td>
</tr>
</table>
<?php
}
?>
