<?php
require'link.php';
?>
<?php 
if(isset($_REQUEST['submit']))
{
$title=$_REQUEST['title'];
$post=$_REQUEST['post'];
$edu=$_REQUEST['edu'];
$exp=$_REQUEST['exp'];
$date=$_REQUEST['date'];

session_start();
$id=intval($_SESSION['usid']);;

$sql="INSERT INTO job(user_id,job_title,post_of_job,education,experience,date) values('".$id."', '".$title."','".$post."', '".$edu."','".$exp."', '".$date."')";

$result=mysqli_query($conn,$sql);
if($result)
{
header("location:admin.php");
}
else 
{
echo "eroor";
}


}


?>
