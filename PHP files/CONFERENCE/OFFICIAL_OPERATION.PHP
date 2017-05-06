<?php
if(isset($_POST['booking']))
{
    header("Location:toreal.php"); 
}

else if(isset($_POST['history']))
{
    header("Location:abhishek1.php"); 
}
else if(isset($_POST['updation']))
{
    header("Location:updation.php"); 
}
else if(isset($_POST['cancel']))
{
    header("Location:conference_cancel.php"); 
}
else
{
	echo "Please Select One Of The Button";
	header("Location:selectofficial.php");
}
?>