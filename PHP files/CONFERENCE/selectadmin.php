<html>
<head>
<title> Login Page</title>
<?php include "boothead.php";?>
<link href="bootcolor.css" rel="stylesheet" type="text/css" /></head>
<body>
<?php include "bootmenubar.php"?>
 <br><br>
   <!--Contact-->
   
      <div class="container">
      <div class="jumbotron">  
          <div class="header-section text-center text-info"> <div class="row">
            <font size="7"><div class="col-md-12 col-sm-12 col-xs-12">CONFERENCE HALL BOOKING</div></FONT>
    <font size="6"><div class="col-md-12 col-sm-12 col-xs-12">Choose the Operation</div></FONT></div></div>
<br><br>
<form action="admin_operation.php" method="post">
 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
    <input type="submit" value="Detail Of Booking List" name="booking_list" class="btn btn-success btn-lg active" style="height:50px; width:379px; font-size:18pt"/>
	</div></div><br><br>

 <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
    <input type="submit" value="Detail of Conference Hall" name="conf_hall" class="btn btn-success btn-lg active" style="height:50px; width:379px; font-size:18pt"/>
	</div></div><br><br>
	 
	  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
    <input type="submit" value="Edit Conference Hall Data" name="edit_conf" class="btn btn-success btn-lg active" style="height:50px; width:379px; font-size:18pt" />
	</div></div><br><br>
	 
	  <div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12 text-center">
    <input type="submit" value="Official Detail" name="off_detail" style="height:50px; width:379px; font-size:18pt" class="btn btn-success btn-lg active" />
	</div></div><br><br>
	 </form>
	</body>
	</html>