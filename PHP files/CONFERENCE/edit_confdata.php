<html><head>
<title> Login Page</title>
<?php include"boothead.php"; ?>
<link href="bootcolor.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include"bootmenubar.php"; ?>
<br><br>
<div class="container">
<div class="jumbotron">
<div class="header-section text-center text-info">
<h1 ALIGN="CENTER"><FONT SIZE="20">CONFERENCE HALL DATA</FONT></H1>
<br><br></div>
<div class="row">
<form action="editdata_admin.php" method="post">
 <div class="col-md-12 col-sm-12 col-xs-12 text-center">
    <input type="submit" value="Add Conference Hall" name="Add_Data" style="height:50px; width:300px; font-size:18pt" class="btn btn-success btn-lg active" />
	</form></div></div><br><br>
	<div class="row">
<form action="editdata_admin.php" method="post">
 <div class="col-md-12 col-sm-12 col-xs-12 text-center">
    <input type="submit" value="Edit Conference Hall" name="Edit_Data" style="height:50px; width:300px; font-size:18pt" class="btn btn-success btn-lg active" />
	</div></div><br><br>
	<div class="row">
<form action="editdata_admin.php" method="post">
 <div class="col-md-12 col-sm-12 col-xs-12 text-center">
    <input type="submit" value="Delete Conference Hall" name="Delete_Data" style="height:50px; width:300px; font-size:18pt" class="btn btn-success btn-lg active" />
	</div></div>	 </form>
	 <div class="row" style="margin-top:100px;"></div></div></div>

	 </body>
	 </html>
	 