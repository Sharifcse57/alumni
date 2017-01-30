<?php
include_once('link.php');
if (!empty($_POST['submit'])) {



$comment_id=$_POST['comment_id'];
$comment=$_POST['comment'];
$sql="UPDATE comment SET comment='$comment' where comment_id='$comment_id' ";
if (!(mysqli_query($conn, $sql))) {
  
    echo "Error creating database: " . mysqli_error($conn);
    exit;
}
}
header("location:profile.php");
?>