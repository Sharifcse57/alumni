<?php 
include_once'link.php';

if (isset($_REQUEST['comment_id']) && !empty($_REQUEST['comment_id'])) 
{
$comment_id = $_REQUEST['comment_id'];
$sql = "DELETE FROM comment WHERE comment_id='".$comment_id."'";
if (mysqli_query($conn,$sql)) 
{
header("location:student.php");
}
else
{
echo "<script>alert('Error Occured Not Deleted')</script>";
}
}

?>