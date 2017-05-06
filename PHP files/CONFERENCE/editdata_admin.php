<?php
if(isset($_POST['Add_Data']))
{
    header("Location:add_data.php"); 
}

else if(isset($_POST['Edit_Data']))
{
    header("Location:edit_data.php"); 
}
else if(isset($_POST['Delete_Data']))
{
    header("Location:delete_data.php"); 
}
else
{
	echo "Please Select One Of The Button";
	header("Location:edit_confdata.php");
}
?>