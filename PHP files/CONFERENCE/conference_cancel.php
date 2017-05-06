<?php
$db_name="conference_hall_data";
$servername = "localhost";
$user = "root";
$password = "";
$conn = mysqli_connect($servername, $user, $password, $db_name);
$off_Id="";
$flag="";
	if(isset($_POST['book_id']))
	{
	 $off_Id=$_POST['book_id'];
    
       
   // echo "$off_Id";
	$query= "DELETE FROM BOOKING_DATA WHERE booking_id='$off_Id'";
	$result=mysqli_query($conn,$query);
  // $p = "SELECT book_id from conference_book where book_id=".$off_Id;
	
	
if(mysqli_affected_rows($conn)===1)
{    
echo '<script language="javascript">';
echo 'alert("DELETED!!")';
echo '</script>';
$flag=1;
}
else
echo "No Booking id found";
}
if ($flag==1)
{
 echo "send email";
}

?>
<html>
<head>
<title>Conference Hall Data Delete</title>
<?php include "boothead.php"; ?>
<link href="bootcolor.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include "bootmenubar.php"; ?>
<br><br>

   <div class="container">
    <div class="jumbotron">
    <div class="header-section text-center text-info">
            <h1><font size="20">CONFERENCE HALL DATA DELETED</font></h1>
             <br><br>  </div>
<form action="" method="post">
      
				  <div class="row">                
				<div class="col-md-4 col-sm-4 col-xs-4 text-right"><font size="6" class="text-info" class="text-info">Book_Id</font></div>
                  <div class="col-md-8 col-sm-8 col-xs-8"><div class="col-xs-8 form-group"><input name="book_id" class="form-control" placeholder="Enter Booking_Id" type="NUMBER" MIN="1" REQUIRED/></FONT>
	 </div></div></div>
	 <br><br>
	<div class="form-group">
				<div class="col-md-9 col-sm-9 col-xs-9 text-center">
                  
				  <!-- Button -->
                <input type="submit" id="submit" name="submit" class="btn btn-success btn-lg active">
              </div></div> </form>
			  <div class="row" style="margin-top:180px;"></div>
			  </div>
          
  		 
          
        </div>
      
    </section>
    <!--/ Contact-->
	
	
	</body>
	</html>