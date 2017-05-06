<html>
<head>
  <title>Add Data</title>
 <?php include "boothead.php"; ?>
 <link href="bootcolor.css" rel="stylesheet" type="text/css" />
 </head>
   <body>
   <?php include "bootmenubar.php"; ?>
   <br><br>
       <div class="container">
        <div class="jumbotron">      
	  <div class="header-section text-center text-info">
       <h1 ALIGN="CENTER"><FONT SIZE="20">CONFERENCE HALL BOOKING</FONT></H1></div>
    <div class="row">
	<form action="official_view_add.php" method="post">
    <div class="col-md-12 col-sm-12 col-xs-12 text-center ">
	<div class="row" style="margin-top:80px;"></div>
    <input type="submit" value="View Official Information" name="off_info" class="btn btn-success btn-lg active" style="height:50px; width:379px; font-size:18pt" />
	</div></div><br>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12 text-center">
    <input type="submit" value="Add Official Data" name="off_add" class="btn btn-success btn-lg active" style="height:50px; width:379px; font-size:18pt"/>
	</div></div><br>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12 text-center">
    <input type="submit" value="Delete Official Data" name="off_del" class="btn btn-success btn-lg active" style="height:50px; width:379px; font-size:18pt"/>
	</div></div>
	
	<div class="row" style="margin-top:100px;"></div></div></div>
	
	</body></html>