<?php 
session_start();
if (isset($_REQUEST['id']) && (!empty($_REQUEST['id']))) 
{   
session_destroy();   
header("location:index.php");
} 
else
{
echo"No logout Id";
}


?>