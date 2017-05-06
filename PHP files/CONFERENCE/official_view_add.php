<?php
if(isset($_POST['off_info']))
{
    header("Location:off_info.php"); 
}

else if(isset($_POST['off_add']))
{
    header("Location:off_add.php"); 
}
else if(isset($_POST['off_del']))
{
    header("Location:off_del.php"); 
}
else
{
	echo "Please Select One Of The Button";
	header("Location:getoff_detail.php");
}
?>