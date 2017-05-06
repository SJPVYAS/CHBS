<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Enter Details</title>
<?php include"boothead.php";?>
 <link href="bootcolor.css" rel="stylesheet" type="text/css" /></head>
<body>
<?php include "bootmenubar.php"?>
<br><br>
   <!--Contact-->
   
      <div class="container">
        <div class="jumbotron">
          <div class="header-section text-center text-info">
		  <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"><FONT SIZE="20" class="text-info">Insert Conference Hall Data</div></font></div></div>
             <br><br>  
<form action="add_data1.php" method="post">
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-4 text-center text-info"><FONT SIZE="5">Country</font></div>
<div class="col-sm-8 col-md-8 col-xs-8"><div class="col-xs-8 form-group"><select name="country" class="form-control countries" id="countryId" required="required">
<option value="">Select Country</option>
</select>
</div></div></div>

<div class="row">
<div class="col-md-4 col-sm-4 col-xs-4 text-center text-info"><FONT SIZE="5">State</font></div>
<div class="col-sm-8 col-md-8 col-xs-8"><div class="col-xs-8 form-group">
        <select name="state" class="form-control states" id="stateId" required="required">
<option value="">Select State</option>
</select>
</div></div></div>



<div class="row">
<div class="col-md-4 col-sm-4 col-xs-4 text-center text-info"><FONT SIZE="5">City</font></div>
<div class="col-sm-8 col-md-8 col-xs-8"><div class="col-xs-8 form-group"><select name="city" class="form-control cities" id="cityId" required="required">
<option value="">Select City</option>
</select>
</div>
</div>
<div class="row">
				<div class="form-group">
				<div class="col-md-4 col-sm-4 col-xs-4 text-center text-info"><font size="5" class="text-info">Capacity</font></div>
                  <div class="col-xs-8 col-md-8 col-sm-8 col-xs-8"><div class="col-xs-8 form-group"><input type="number" min="1" class="form-control" name="capacity" max="600" id="email" placeholder="Enter Capacity" data-rule="email" data-msg="Please enter a valid email" />
                    </div></div></div></div>
	<div class="row">
				<div class="form-group">
				<div class="col-md-4 col-sm-4 col-xs-4 text-center text-info"><font size="5" class="text-info">Conference Hall Name</font></div>
                  <div class="col-xs-8 col-md-8 col-sm-8 col-xs-8"><div class="col-xs-8 form-group"><input type="text" min="1" class="form-control" name="conf_hall_name" placeholder="Enter Conference Hall Name"/>
                    </div></div></div></div>				
<div <div class="row">
<div class="col-md-12 col-sm-12 col-xs-12 text-center text-info">
	<FONT SIZE="5">
    <input name="btndetail" type="submit" value="submit" class="btn btn-success btn-lg active"/>
	</FONT>
	</TD>
     </TR>
 </TABLE>
 </FORM>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
    <script src="js1/location.js"></script>   
 </BODY>
 </HTML>


