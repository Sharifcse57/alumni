<?php
 require'link.php';
?>
<?php 
if(isset($_REQUEST['submit']))
{
			$user_id=$_REQUEST['user_id'];
		    $fullname=$_REQUEST['fullname'];
		    $email=$_REQUEST['email'];
		    $department=$_REQUEST['department'];
		    $batch=$_REQUEST['batch'];
		    $year=$_REQUEST['year'];
		    $passing_year=$_REQUEST['passing_year'];
		    $username=$_REQUEST['username'];
		    $passward=$_REQUEST['passward'];
		    $type=$_REQUEST['type'];
		    $target_file = "img/" . basename($_FILES["image"]["name"]);
        if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            echo "error";
                            } 
		
		
		$sql="INSERT INTO userinfo(user_id,fullname,email,department,batch,year,passing_year,username,passward,type,image) values('".$user_id."','".$fullname."','".$email."','".$department."','".$batch."','".$year."','".$passing_year."','".$username."','".$passward."','".$type."','". $target_file."')";
		
		$result=mysqli_query($conn,$sql);
		if($result)
		{
			header("location:admin_3.php");
		}
		else 
		{
			echo "eroor";
		}


}


 ?>