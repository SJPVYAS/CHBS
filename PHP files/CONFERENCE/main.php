
<html>
<title> Login Page</title>
<head><style>
.error {color: #FF0000;}
</style>
<?php include "boothead.php"; ?>
<link href="bootcolor.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php include "bootmenubar.php"; ?><br><br>
<div class="container">
<div class="jumbotron">
<div class="header-section text-center text-info">
<h1><FONT SIZE="20">CONFERENCE HALL BOOKING</FONT></H1><br><br>
</div>
<form action="main1.php" method="post">
<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">Login Id:</font></div>
 <div class="col-md-8 col-sm-8 col-xs-8 align-left"><div class="col-xs-8 form-group">
 <input type="text" name="user" class="form-control form" id="user" value="" placeholder="Enter Login ID" required/>
		   </div>
                  </div></div>	
<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">Password:</font></div>
 <div class="col-md-8 col-sm-8 col-xs-8 align-left"><div class="col-xs-8 form-group">
 <input type="password" name="pass" class="form-control form" id="pass"  value="" placeholder="Enter Password" required/>
			     </div>
                  </div></div>	
	<div class="row" >
    <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="5" class="text-info">ADMIN</font></div>
    <div class="col-md-1 col-sm-1 col-xs-1 align-left"><div class="form-group">
	<INPUT TYPE="RADIO" NAME="login" value="value1"></INPUT></div></div>
	<div class="col-md-2 col-sm-2 col-xs-2 text-right"><FONT SIZE="5" class="text-info">OFFICIAL</font></div>
    <div class="col-md-5 col-sm-1 col-xs-1 align-right"><div class="form-group">
	<INPUT TYPE="RADIO" NAME="login" value="value2"></INPUT></div></div></div><br><br>
	<div class="row">
    <div class="col-md-4 col-sm-4 col-xs-4 text-right"><input name="btn"  class="btn btn-success btn-lg active" type="submit" value="Login"/></div>
    <div class="col-md-6 col-sm-6 col-xs-6 align-left"><div class="form-group"><input class="btn btn-success btn-lg active" name="reset" type="reset" value="Reset"/>
	</div></div></div>
	 <div class="row" style="margin-top:100px;">
	</div></div>	 	
</body>
</html>
