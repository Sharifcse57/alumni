<?php 
include_once'link.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>sharif</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<pre>
		<?php 
		$sql="SELECT userinfo.fullname, post.details, post.date_time,post.post_id
		FROM userinfo
		INNER JOIN post
		ON userinfo.id=post.user_id;";


		if(!($result=mysqli_query($conn,$sql)))
		{
			echo "error".mysqli_error($conn);
			exit;
		}
		if(mysqli_num_rows($result)>0)
			while ($row=mysqli_fetch_assoc($result) )
			{
				var_dump($row);
			} 

			?>	
		</pre>

	</body>

	</html>