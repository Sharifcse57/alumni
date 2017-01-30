<?php
include_once('link.php');
if (!empty($_POST['submit'])) {



$post_id=$_POST['post_id'];
$details=$_POST['details'];
$sql="UPDATE post SET details='$details' where post_id='$post_id' ";
if (!(mysqli_query($conn, $sql))) {
  
    echo "Error creating database: " . mysqli_error($conn);
    exit;
}
}
header("location:profile.php");
?>