<html>
<title> Add Data of Conference Hall</title>
<?php include "boothead.php"; ?>
<link href="bootcolor.css" rel="stylesheet" type="text/css" />
<body>
<?php include "bootmenubar.php"; ?>

<br><br>
   <!--Contact-->
   
      <div class="container">
        <div class="jumbotron">
          <div class="header-section text-center text-info">
		  <div class="row">
            <h1><font size="20"><div class="col-md-12 col-sm-12 col-xs-12">CONFERENCE HALL BOOKING</div></font></h1></div></div>
             <br><br>
<form action="off_data1.php" method="post">

<div class="row">
 <div class="col-md-4 col-sm-4 col-xs-4 text-right"><FONT SIZE="6" class="text-info">Name</font></div>
 <div class="col-md-8 col-sm-8 col-xs-8 align-left"><div class="col-xs-8 form-group">
    <input name="off_name" type="text" class="form-control form" placeholder="Enter Name" required /></FONT>
	 </div>
                  </div></div>	
				  <div class="row">                
				<div class="col-md-4 col-sm-4 col-xs-4 text-right"><font size="6" class="text-info">Department</font></div>
                  <div class="col-md-8 col-sm-8 col-xs-8"><div class="col-xs-8 form-group">
    <input name="department" class="form-control form" placeholder="Enter Department Name" type="text" required/></FONT>
	</div></div></div>
                  <div class="row">
					 <div class="form-group">
				<div class="col-md-4 col-sm-4 col-xs-4 text-right"><font size="6" class="text-info">Date Of Joining</font></div>
                  <div class="col-xs-8 col-md-8 col-sm-8 col-xs-8 text-center"><div class="col-xs-8 form-group"><input name="d_o_j" placeholder="Enter Date Of Joining" class="form-control form" type="text" required/></FONT>
  </div></div></div></div>
					<div class="row">
				<div class="form-group">
				<div class="col-md-4 col-sm-4 col-xs-4 text-right"><font size="6" class="text-info">Email </font></div>
                  <div class="col-xs-8 col-md-8 col-sm-8 col-xs-8"><div class="col-xs-8 form-group"><input placeholder="Enter Email" class="form-control form" name="email" type="email" required/></FONT>
	</div></div></div></div>
					
<div class="row">
				<div class="form-group">
				<div class="col-md-4 col-sm-4 col-xs-4 text-right"><font size="6" class="text-info">Mobile No.</font></div>
                  <div class="col-xs-8 col-md-8 col-sm-8 col-xs-8"><div class="col-xs-8 form-group">
    <input name="mob" type="text" class="form-control form" placeholder="Enter Mobile No." required/></FONT>
	</div></div></div></div>
					
	<div class="row">
				<div class="form-group">
				<div class="col-md-4 col-sm-4 col-xs-4 text-right"><font size="6" class="text-info">Age</font></div>
                  <div class="col-xs-8 col-md-8 col-sm-8 col-xs-8"><div class="col-xs-8 form-group">
    <input name="age" class="form-control form" type="text" placeholder="Enter Age" required/></FONT>
	</div></div></div></div>
   <div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4 text-right"><font size="6" class="text-info">Address</font></div>
                  <div class="col-xs-8 col-md-8 col-sm-8 col-xs-8"><div class="col-xs-8 form-group">
    <textarea rows="5" class="form-control" placeholder="Enter Address"  cols="10"required></textarea></FONT>
	</div></div></div>
     <div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4 text-right"><font size="6" class="text-info">Login Id</font></div>
                  <div class="col-xs-8 col-md-8 col-sm-8 col-xs-8"><div class="col-xs-8 form-group">
    <input name="log_id" placeholder="Enter Login Id" class="form-control" type="text" required/></FONT>
	</div></div></div>
    <div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4 text-right"><font size="6" class="text-info">Password</font></div>
                  <div class="col-xs-8 col-md-8 col-sm-8 col-xs-8"><div class="col-xs-8 form-group">
    <input name="pswrd" class="form-control" placeholder="Enter Password" type="Password" required/>
	  </div></div></div>
					<br><br>
					<div class="form-group">
				<div class="col-md-4 col-sm-4 col-xs-4 text-right"><font size="6" class="text-info"></font></div>	
				<div class="col-md-8 col-sm-8 col-xs-8 align-center">
                  
				  <!-- Button -->
               <input type="submit" id="submit" name="submit" class="btn btn-success btn-lg active">
              </div></div></div></div>
          </form>
	</body>
	</html>