<?php
if(isset($_POST['booking_list']))
{
    header("Location:getbooking_list.php"); 
}

else if(isset($_POST['conf_hall']))
{
    header("Location:getconf_hall.php"); 
}
else if(isset($_POST['edit_conf']))
{
    header("Location:edit_confdata.php"); 
}
else if(isset($_POST['off_detail']))
{
    header("Location:getoff_detail.php"); 
}
else
{
	echo "Please Select One Of The Button";
	header("Location:selectadmin.php");
}
?>