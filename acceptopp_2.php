<?php
include_once('link.php');
if (!empty($_POST['submit'])) {
$is_active=$_POST['is_active'];


$id=$_POST['id'];
$sql="UPDATE studentinfo SET is_active='$is_active' where id='$id' ;";
if (!(mysqli_query($conn, $sql))) {
  
    echo "Error creating database: " . mysqli_error($conn);
    exit;
}
}
header("location:admin_8.php");
?>