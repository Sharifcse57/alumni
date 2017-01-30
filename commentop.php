<?php
require'link.php';
?>
<?php 
if(isset($_REQUEST['submit']))
{
$comment=$_REQUEST['comment'];

session_start();
$id=intval($_SESSION['usid']);
$post_id=$_SESSION['post_id'];

$sql="INSERT INTO comment(user_id,post_id,comment) values('".$id."', '".$post_id."', '".$comment."')";

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