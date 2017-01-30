<?php 
	include_once'link.php';

	if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) 
	{
		$id = $_REQUEST['id'];
		$sql = "DELETE FROM userinfo WHERE id='".$id."'";
		if (mysqli_query($conn,$sql)) 
		{
			header("location:admin_2.php");
		}
		else
		{
			echo "<script>alert('Error Occured Not Deleted')</script>";
		}
	}

 ?>