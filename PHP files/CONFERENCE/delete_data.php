<html><head>
<title>  DATA</title>
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
            <h1><font size="20"><div class="col-md-12 col-sm-12 col-xs-12 text-center">CONFERENCE HALL BOOKING</div></font></h1></div></div>
              <div class="row" style="margin-top:80px;"></div> 
<form action="delete_data.php" method="post">
				<div class="row">
				<div class="form-group">
				<div class="col-md-4 col-sm-4 col-xs-4 text-right text-info"><font size="5" class="text-info">Enter Conference Id</font></div>
                  <div class="col-xs-8 col-md-8 col-sm-8 col-xs-8"><div class="col-xs-9 form-group"><input type="NUMBER" MIN="1"  class="form-control" name="conf_Id" placeholder="Enter Conference Hall Id" REQUIRED/>
                    </div></div></div></div><br>
					<div class="row">
					<div class="form-group">
			<div class="col-md-12 col-sm-12 col-xs-12 col-sm-offset-5 col-md-offset-5 col-xs-offset-5">
    <input type="submit" value="Delete" name="del" style="height:35px; width:100px ;font-size:14pt" class="btn btn-success btn-lg active"/>
</div></div></div></div></div>
	</form>
</body>
</html>