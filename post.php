<?php
require'link.php';
?>
<?php 
if(isset($_REQUEST['submit']))
{
$details=$_REQUEST['details'];

session_start();
$id=intval($_SESSION['usid']);;

$sql="INSERT INTO post(details, user_id) values('".$details."', '".$id."')";

$result=mysqli_query($conn,$sql);
if($result)
{
header("location:profile.php");
}
else 
{
echo "eroor";
}


}


?>
