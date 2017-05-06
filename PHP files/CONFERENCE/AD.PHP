<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Enter Details</title>
<?php include "boothead.php";?>

<link href="bootcolor.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php include "bootmenubar.php";?>
<br><br>
<div class="container">
<div class="jumbotron">
<div class="header-section text-center text-info">
<div clas="row">
<div class="col-md-12 col-sm-12 col-xs-12"><FONT SIZE="10">CONFERENCE HALL BOOKING</FONT></div>
<div class="col-md-12 col-sm-12 col-xs-12"><font size="8"> ENTER THE DETAILS  <div class="row" style="margin-top:80px;"></div></FONT></div></div></div>

<form action="UTILITIES.php" method="post">

<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">Ministry</font></div>
 <div class="col-md-8 col-sm-8 col-xs-8 align-left">
 <div class="col-xs-8 form-group">
<?php 
$ministry=array('Ministry of Agriculture and Farmers Welfare',
'Ministry of AYUSH',
'Ministry of Chemicals and Fertilizers',
'Ministry of Civil Aviation',
'Ministry of Coal',
'Ministry of Commerce and Industry',
'Ministry of Communications',
'Ministry of Consumer Affairs, Food and Public Distribution',
'Ministry of Corporate Affairs',
'Ministry of Culture',
'Ministry of Defence',
'Ministry of Development of North Eastern Region',
'Ministry of Drinking Water and Sanitation',
'Ministry of Earth Sciences',
'Ministry of Electronics and Information Technology',
'Ministry of Environment, Forest and Climate Change',
'Ministry of External Affairs',
'Ministry of Finance',
'Ministry of Food Processing Industries',
'Ministry of Health and Family Welfare',
'Ministry of Heavy Industries and Public Enterprises',
'Ministry of Home Affairs',
'Ministry of Housing and Urban Poverty Alleviation',
'Ministry of Human Resource Development',
'Ministry of Information and Broadcasting',
'Ministry of Labour and Employment',
'Ministry of Law and Justice',
'Ministry of Micro, Small and Medium Enterprises',
'Ministry of Mines',
'Ministry of Minority Affairs',
'Ministry of New and Renewable Energy',
'Ministry of Panchayati Raj',
'Ministry of Parliamentary Affairs',
'Ministry of Personnel, Public Grievances and Pensions',
'Ministry of Petroleum and Natural Gas',
'Ministry of Power',
'Ministry of Railways',
'Ministry of Road Transport and Highways',
'Ministry of Rural Development',
'Ministry of Science and Technology',
'Ministry of Shipping',
'Ministry of Skill Development and Entrepreneurship',
'Ministry of Social Justice and Empowerment',
'Ministry of Statistics and Programme Implementation',
'Ministry of Steel',
'Ministry of Tourism',
'Ministry of Tribal Affairs',
'Ministry of Urban Development',
'Ministry of Water Resources, River Development and Ganga Rejuvenation',
'Ministry of Women and Child Development',
'Ministry of Youth Affairs and Sports');
echo '<select name="ministry" class="form-control">';
for($i=0;$i<count($ministry);$i++)
{
	echo '<option value="'.$ministry[$i].'">' . $ministry[$i] . '</option>';
}
echo '</select>';
?>
</div></div></div>

<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">Country</font></div>
<div class="col-md-8 col-md-8 col-xs-8"><div class="col-xs-8 form-group"><select name="country" class="form-control countries" id="countryId" required="required">
<option value="">Select Country</option>
</select></div></div></div>
<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">State</font></div>
<div class="col-md-8 col-md-8 col-xs-8"><div class="col-xs-8 form-group"><select name="state" class="form-control states" id="stateId" required="required">
<option value="">Select State</option>
</select></div></div></div>
<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">City</font></div>
<div class="col-md-8 col-md-8 col-xs-8"><div class="col-xs-8 form-group"><select name="city" class="form-control cities" id="cityId" required="required">
<option value="">Select City</option>
</select></div></div></div>
<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">Capacity</font></div>
 <div class="col-md-8 col-sm-8 col-xs-8 align-left"><div class="col-xs-8 form-group">
<input name="capacity" class="form-control"   max="600" type="number"  value="0" id=""    min="1" /></FONT>
</div></div></div>
<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">Date</font></div>
 <div class="col-md-8 col-sm-8 col-xs-8 align-left"><div class="col-xs-8 form-group">
 <input name="sdate" type="date" class="form-control" id="stime"  min="2017-03-22"  max="2017-12-31"  /></FONT>
 </div></div></div>
<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">Entry Time</font></div>
 <div class="col-md-8 col-sm-8 col-xs-8 align-left"><div class="col-xs-8 form-group">
 <input name="e_time" type="time"  min="08:00" max="22:00" class="form-control"  max="" id="stime" /></FONT></div></div></div>
<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">Exit Time</font></div>
 <div class="col-md-8 col-sm-8 col-xs-8 align-left"><div class="col-xs-8 form-group">
 <input   type="time"  name="ex_time" type="time"  min="08:00"  max="22:00" class="form-control"  id="person" /></FONT></div></div></div>
<br><br>
				
    <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="5" class="text-info">AC</font></div>
    <div class="col-md-1 col-sm-1 col-xs-1 align-left"><div class="form-group">
	<INPUT TYPE="RADIO" NAME="login" value="value1"></INPUT></div></div>
	<div class="col-md-2 col-sm-2 col-xs-2 text-right"><FONT SIZE="5" class="text-info">NON-AC</font></div>
    <div class="col-md-5 col-sm-1 col-xs-1 align-right"><div class="form-group">
	<INPUT TYPE="RADIO" NAME="login" value="value2"></INPUT></div></div></div><br><br>
			<div class="row">
					<div class="form-group">
				<div class="col-md-4 col-sm-4 col-xs-4 text-right"><font size="6" class="text-info"></font></div>	
				<div class="col-md-8 col-sm-8 col-xs-8 align-center">
 <input id="submit" name="btndetail" type="submit" class="btn btn-success btn-lg active">
              </div></div></div>
			  <div class="row" >	  
    </FORM>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>   
    <script src="js1/location.js"></script>   
 </BODY>
 </HTML>
 