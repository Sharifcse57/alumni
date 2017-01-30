<?php
require'link.php';
?>
<?php 
if(isset($_REQUEST['submit']))
{
$title=$_REQUEST['title'];
$detail=$_REQUEST['detail'];
$date=$_REQUEST['date'];

// session_start();
// $id=intval($_SESSION['usid']);;

$sql="INSERT INTO event(event_name,event_detail,date) values('".$title."','".$detail."','".$date."')";

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
