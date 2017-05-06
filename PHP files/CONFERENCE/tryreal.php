<html>
<head>
<title> availablity status</title>
<?php include "boothead.php";?>
<link href="bootcolor.css" rel="stylesheet" type="test/css" />
<style>
.error {color: #FF0000;}
.blue{color: #0000FF}
</style></head>
<body>
<?php include "bootmenubar.php"; ?>   <br><br>
   <!--Contact-->
   
      <div class="container">
        <div class="jumbotron">
          <div class="header-section text-center text-info">
		  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"><FONT SIZE="8" class="text-info">CONFERENCE   HALL   AVAILABILITY</div></font></div></div>
             <br><br>  
			 <?php
session_start();
  $db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$con = mysqli_connect($servername, $user, $password, $db_name);
$a=$entry=$_POST['e_time'];
$b=$exit=$_POST['ex_time'];
//$a=strtotime($entry);
//$confid=$_POST['a'];
//$_SESSION["a"]=$_POST['a'];
$ministry=$_POST['ministry'];
$entry=strtotime($entry);
$exit=strtotime($exit);
$state=$_POST['state'];
$city=$_POST['city'];
$date=$_POST['sdate'];
$capacity=$_POST['capacity'];

$_SESSION["e_time"]=$a;
$_SESSION["ex_time"]=$b;
$_SESSION["state"]=$state;
$_SESSION["city"]=$city;
$_SESSION["sdate"]=$date;
$_SESSION["capacity"]=$capacity;
$_SESSION["ministry"]=$ministry;
echo $con->error;
$c=0;
//echo "hello";
$g=array();
$z="Not Available";
$k="Available";
$sql = "SELECT * from `conference hall` where state_id='$state' and city_id='$city' and capacity>='$capacity' ";
if($result=mysqli_query($con,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
	
$c=0;
$query="SELECT * FROM `booking_data` where confhall_id='$row[0]' and date='$date'";
if($res=mysqli_query($con,$query))
{
//$e=0;//entry time
//$x=0;//exit time

while ($r=mysqli_fetch_row($res))
{
$e=strtotime($r[6]);
$x=strtotime($r[7]);
if(($entry>=$e AND $entry<=$x) OR ($exit>=$e AND $exit<=$x) OR ($entry>=$e AND $exit<=$x )   )
{
$c=1;
}
else if(($entry<=$e AND $exit>=$e) OR ($entry<=$x AND $exit>=$x) )
{
$c=1;
}
else
{


}
}
}
if($c===0)
{
//$x= $row[0].$k;
array_push($g,
array('id'=>$row[0],
'avail'=>$k)
);

//echo "aaaaaaa".$g[0]['id'];
//echo $x;echo "</br>";

}

else
{//$x=$row[0].$z;
//array_push($g,$x);
//echo $x;echo "</br>";

array_push($g,
array('id'=>$row[0],
'avail'=>$z)
);
}




}
}/*
echo "<pre>";
print_r($g);
echo "</pre>";
*/
$total=count($g);
for($i=0;$i<$total;$i++)
{
/*echo "conference id ".$g[$i]['id']."      ";//.$g[$i]['avail'];
echo "conference status ".$g[$i]['avail']."<br>";
if($g[$i]['avail']=="$k"){
$notify="choose to book";
}
else{
$notify="sorry go for near by time";
}*/

}


 //Free result set
mysqli_close($con);
/*$total=count($g);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if () {
    
  } else {
    $username = test_input($_POST["user"]);
  }
}*/


?>		
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-4 text-left">	
<h3 class="text-info">Date:</h3><?php echo $date; ?></div><div class="col-md-4 col-sm-4 col-xs-4 text-center"><h3 class="text-info">Entry Time:</h3><?php echo $a; ?></div><div class="col-md-4 col-sm-4 col-xs-4 text-right">
<h3 class="text-info">Exit Time:</h3><?php echo $b; ?>
<br><br>
</div></div>
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6">
<form action="" method="post">
<div class="well">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6">
<table ALIGN="CENTER" CELLSPACING=""   border="2px" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>

<tr>
    <th style='font-size:25px;' class="text-info">Conf.id</th>
    <th style='font-size:25px;' class="text-info">Status</th>
	<th style='font-size:25px;' class="text-info">Operation</th>
	 </tr>
	 </thead>
    <?php
   for($i=0;$i<$total;$i++)
    { if($g[$i]['avail'] === "$k")
   {?>
    <tbody><tr><td style='font-size:25px;' ALIGN="CENTER"><?php  echo $g[$i]['id'];$_SESSION["R"]=$g[$i]['id']; ?></td>
	<td style='font-size:25px;' ALIGN="CENTER"><?php echo $g[$i]['avail']; ?></td>
	<td><FONT SIZE="5"><INPUT TYPE="RADIO" ALIGN="CENTER"  NAME="a" value="<?php echo $g[$i]['id'] ?>" required/> *<?php echo "Choose To Book";  } ?><br>
	 </FONT> 
	  </td>
	   </tr></tbody>
	<?php 
    }?></table></div></div></div><br>
	<div class="row" >
	<div class="col-md-4 col-sm-4 col-xs-4"><FONT SIZE="5" value="enter your subject here" class="text-info">Subject</label>
		<textarea align="center" name="message" rows="5" cols="20"  width="50%" required/>
          </textarea>
   <br></FONT></div></div>
	<div class="row">
	<div class="col-md-3 col-sm-3 col-xs-3">
	<center>
	<br><br><input name="btn" type="submit" value="BOOK" class="btn btn-success btn-lg active"	 formaction="booked.php"/>
	</center></div></div>
</form>
</div>
<div class="col-md-6 col-sm-6 col-xs-6">
<td align="top">
<div class="row">
<div class="">
<form action="" method="post">
<div class="well">
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-6 align-center">
<table ALIGN="CENTER" CELLSPACING="" style="border: 2px solid black"  class="table table-striped table-bordered table-hover" id="dataTables-example">
<tr>
    <th style='font-size:25px;' class="text-info">Conf.id</th>
    <th style='font-size:25px;' class="text-info">Status</th> 
	<th style='font-size:25px;' class="text-info">Operation</th>
	  </tr>
    <?php
   for($i=0;$i<$total;$i++)
    { if($g[$i]['avail'] === "$z")
   {?>
    <tr><td style='font-size:25px;' ALIGN="CENTER"><?php  echo $g[$i]['id'];$_SESSION["R"]=$g[$i]['id']; ?></td>
	<td style='font-size:25px;' ALIGN="CENTER"><?php echo $g[$i]['avail']; ?></td>
	<td>  <FONT SIZE="5">
	<INPUT TYPE="RADIO" ALIGN="CENTER"  NAME="a" value="<?php echo $g[$i]['id'] ?>" required/> *<?php echo "Choose To Notify";  } 
	?><BR>
	</FONT>   </td></tr>
	
    <?php 
    }?>
<!--	<tr>
	</tr>-->
  </table></center><br><br>
  <center>
  <input name="btn" type="submit" class="btn btn-success btn-lg active" value="Notification" formaction="notify.php" /></center></td></div></div></div></form></div></div></br></br>
</div></div>
<form>
  <Table  style="width:70%" style="hight:70%"  align="center" class="table table-striped table-hover">
<TR>
 
	<TD align="center">
	<br><br>
    <input name="btn" type="submit" value="BOOK NEAR_BY" class="btn btn-success btn-lg active"  formaction="toreal.php"/>
	</TD>
	
     </TR></TABLE>
	 </form>
	 </div></div>
	
</body>
</html>
	
    
	