<?php
require'link.php';
?>
<?php 
if(isset($_REQUEST['submit']))
{
$comment=$_REQUEST['comment'];

session_start();
$usid=$_SESSION["usid"];
// $id=intval($_SESSION['usid']);
$post_id=$_SESSION['post_id'];

$sql="INSERT INTO comment(user_id,post_id,comment) values('".$usid."', '".$post_id."', '".$comment."')";

$result=mysqli_query($conn,$sql);
if($result)
{
header("location:student.php");
}
else 
{
echo "eroor";
}


}


?>