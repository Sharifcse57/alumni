<?php 
include_once'link.php';

if (isset($_REQUEST['post_id']) && !empty($_REQUEST['post_id'])) 
{
$post_id = $_REQUEST['post_id'];
$sql = "DELETE FROM post WHERE post_id='".$post_id."'";
if (mysqli_query($conn,$sql)) 
{
header("location:profile.php");
}
else
{
echo "<script>alert('Error Occured Not Deleted')</script>";
}
}

?>