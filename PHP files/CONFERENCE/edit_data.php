<html>
<head>
<title> EDIT DATA</title>
<?php include "boothead.php";?>
</head>
<body>
<?php include "bootmenubar.php";?>
<br><br><div class="jumbotron">
      <div class="container">
         <div class="header-section text-center text-info">
            <div class="row">
			<h1><font size="20"><div class="col-md-12 col-sm-12 col-xs-12">CONFERENCE HALL BOOKING</div></font></h1></div></div>
             <br><br>
<form action="edit_data1.php" method="post">
<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">Enter Conf_Id</font></div>
 <div class="col-md-8 col-sm-8 col-xs-8 align-left"><div class="col-xs-8 form-group">
 <input name="conf_Id" type="NUMBER" MIN="1"  REQUIRED/></div></div></div>
  <div class="row">
	<div class="col-md-11 col-sm-12 col-xs-12 text-right"><div class="col-xs-8 form-group"><FONT SIZE="6" class="text-info">Which attribute you want to Change?
	</FONT>
	</div>
	</div></div>
  <script type="text/javascript">
    function check1(chk1) 
	{
        var state = document.getElementById("state");
        state.style.display = chk1.checked ? "block" : "none";
    }
</script>

<label for="chk">
<div class="row">
<div class="col-md-3 col-sm-4 col-xs-5"></div>
<div class="col-md-3 col-sm-4 col-xs-5 text-right">

    <input type="checkbox" name='chk1' onclick="check1(this)" /></div>
<div class="col-md-3 col-sm-4 col-xs-5 text-left"><FONT SIZE="6" class="text-info"><center>State</center></font></div>
</label></div>
<div id="state" style="display: none">
    State Name:
    <input type="text" id="txt1" name="txt1"/>
</div>
</td>
</tr>

<tr><td>
<script type="text/javascript">
    function check2(chk2) 
	{
        var city = document.getElementById("city");
        city.style.display = chk2.checked ? "block" : "none";
    }
</script>
<label for="chk">
    <input type="checkbox" name="chk2" onclick="check2(this)" />
    City Name
</label>

<div id="city" style="display: none">
    City Name
    <input type="text" id="txt2" name="txt2"/>
</div>
</td>
</tr>


<tr><td>
<script type="text/javascript">
    function check3(chk3) 
	{
        var conf_name = document.getElementById("conf_name");
        conf_name.style.display = chk3.checked ? "block" : "none";
    }
</script>
<label for="chk">
    <input type="checkbox" name="chk3" onclick="check3(this)" />
    Conf_Name
</label>

<div id="conf_name" style="display: none">
    Conf_Name:
    <input type="text" id="txt3" name="txt3" />
</div>
</td>
</tr>


<tr><td>
<script type="text/javascript">
    function check4(chk4) 
	{
        var state = document.getElementById("capacity");
        capacity.style.display = chk4.checked ? "block" : "none";
    }
</script>
<label for="chk">
    <input type="checkbox" name="chk4" onclick="check4(this)" />
    Capacity
</label>

<div id="capacity" style="display: none">
    Capacity:
    <input type="text" id="txt4" name="txt4" />
</div>
</td>
</tr>


	<TR>
	<TD>
	<FONT SIZE="5">
    <input name="btn" type="submit" value="Submit"/>
	</FONT>
	</TD>
     </TR>
</TABLE>	 
</form>
</body>
</html>