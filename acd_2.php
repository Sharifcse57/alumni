<?php 
	include_once'link.php';

	if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) 
	{
		$id = $_REQUEST['id'];
		$sql = "DELETE FROM job WHERE job_id='".$id."'";
		if (mysqli_query($conn,$sql)) 
		{
			header("location:admin_4.php");
		}
		else
		{
			echo "<script>alert('Error Occured Not Deleted')</script>";
		}
	}

 ?>