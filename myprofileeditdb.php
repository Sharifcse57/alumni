<?php
include_once('link.php');
if (isset($_POST['submit']))
 {
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$department=$_POST['department'];
$username=$_POST['username'];
$passward=$_POST['passward'];
$prd=$_POST['prd'];


$id=$_POST['id'];
$sql="UPDATE userinfo SET fullname='$fullname',email='$email', department='$department', username='$username', passward='$passward', professional_info='$prd' where id='$id' ;";
if ((mysqli_query($conn, $sql))) 
{
  
 
	echo "successfull";
	header("location:profile.php");
}
else
{
	echo "error";
}

}

?>