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
$contact=$_REQUEST['contact'];


session_start();
$id=intval($_SESSION['usid']);;

$sql="INSERT INTO job(user_id,job_title,post_of_job,education,experience,date,contact) values('".$id."', '".$title."','".$post."', '".$edu."','".$exp."', '".$date."', '".$contact."')";

$result1=mysqli_query($conn,$sql);




}
if($result1)
{
$sql2="SELECT id FROM studentinfo ";

$rs=mysqli_query($conn,$sql2);

if(mysqli_num_rows($rs)>0)
while ($row1=mysqli_fetch_assoc($rs) )
{

$stu_id=$row1['id'];
$sql3="SELECT job_id FROM job ";
$rss=mysqli_query($conn,$sql3);
if(mysqli_num_rows($rss)>0)
while ($row2=mysqli_fetch_assoc($rss) )
{
$job_id=$row2['job_id'];
$sql4="INSERT INTO notifiacation(stu_id,job_id) values('".$stu_id."', '".$job_id."')";

mysqli_query($conn,$sql4);
}
}
header("location:profile.php");
}
else 
{
echo "eroor";
}





?>
