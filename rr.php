<?php 
if (isset($_REQUEST['submit']))

{
$type=$_REQUEST['type'];
if($type==2)
{
header("location:register.php");

}
if($type==3)
{
header("location:registerstudent.php");

}



}


?>