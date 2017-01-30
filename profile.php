<?php 
		require 'link.php';
		session_start();
		$username=$_SESSION['username']; 


		$id=$_SESSION["usid"];

		if (empty($_SESSION["usid"]))
		{  
		header("location:index.php");

		}else
		{
		$usid=$_SESSION["usid"];


		}




$sql="SELECT * FROM userinfo WHERE id='$usid'";
$result=mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
<title>sharif.com</title>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<link href="css/animate.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<script src="jss/bootstrap.min.js"></script>
<script src="jss/jquery.min.js"></script>
<script src="jss/f.js"></script>
<script src="jss/init.js"></script>
<link href="csss/font-awesome.css" rel="stylesheet"> 
<link href="csss/g.css" rel="stylesheet"> 

</head>

<body class="grey lighten-4" style="min-height:500px">

			<nav  >
					<div class="nav-wrapper green darken-4">
					<img src="img/iubat.png" align="right" style="margin-right:30px;" height="100">
					<?php 
					$sql="SELECT *
					FROM userinfo WHERE id=$usid
					";

					if(!($result=mysqli_query($conn,$sql)))
					{
					echo "error".mysqli_error($conn);
					exit;
					}
					if(mysqli_num_rows($result)>0)
					while ($row=mysqli_fetch_assoc($result) )
					{


					?>
					<a  class="brand-logo"><?php echo $row['fullname']; ?></a>
					<?php } ?>
					<ul class="right hide-on-med-and-down">
					<li><a href="profile.php">Home</a></li>
					<li><a href="myprofile.php?id=<?php echo $usid; ?>">My profile</a></li>
					<li><a href="user.php">Users</a></li>
					<li><a href="all_job.php">Jobs</a></li>


					<li><a href="logout.php?id=<?php echo $usid; ?>">logout</a></li>
					</ul>
					</div>
			</nav>









<div class="section">
	<div class="row">

		<div class="col s12 m3   ">
				<h4><p class="center-align animated infinite flipInX ">JOB</p></h4>
				<!-- <h1 class="animated infinite bounce">Example</h1> -->
				<hr>
			<div> 
				<?php 
			      $sql="SELECT * FROM job ORDER BY job_id DESC limit 3;";

			      if(!($result=mysqli_query($conn,$sql)))
			      {
			        echo "error".mysqli_error($conn);
			        exit;
			      }
			      if(mysqli_num_rows($result)>0)
			        while ($row=mysqli_fetch_assoc($result) )
			        {  
			          ?>
			   

			    <h5 ><?php echo $row['job_title'] ?></h5>
			    <hr>
			    <b><?php echo $row['post_of_job'] ?></b><br>

				<b>Education :</b> <?php echo $row['education'] ?>
				<br>
				<b>Experience :</b><?php echo $row['experience'] ?>
				<br>
				<!-- <b>Dead Line  :</b><?php echo $row['date'] ?> -->
				Status :<?php 
                $expiry_date=$row['date'];
                $exp_date=strtotime($expiry_date);
                if($exp_date>time())
                {

                  echo "Available";

                }
                else
                {
                  echo "Passed Dedline";

                }

                ?><br>
				<b>Contact Number :<?php echo $row['contact'] ?></b>

	
				<hr>

				<?php } ?>
				<br>
				<!-- <a href="all_job.php"><b>All Jobs</b></a> -->
			  <a class="waves-effect waves-light btn green darken-4" href="job.php">Post New Job </a>
			</div>
		</div>


			<div class="col s12 m6 animated fadeIn">
			<b ><h4 > Alumni and Student Conversation </h4></b>
		<div class="row ">



		<form action="post.php" method="post">
				<label for="textarea1">Whats your mind</label>
				<textarea id="textarea1" class="materialize-textarea" name="details" length="250"></textarea>

				<button class="waves-effect waves-light btn green darken-4" type="submit" name="submit">submit</button>

		</form>
		<table class="table" border="1">
		<thead>
		<th>Post From Alumni</th>



		</thead>
		<?php 
		$sql="SELECT post.details, post.date_time,post.post_id, user.fullname,post.user_id
		FROM post
		INNER JOIN userinfo user ON post.user_id = user.id
		ORDER BY post.post_id DESC limit 4";

		if(!($result=mysqli_query($conn,$sql)))
		{
		echo "error".mysqli_error($conn);
		exit;
		}
		if(mysqli_num_rows($result)>0)
		while ($row=mysqli_fetch_assoc($result) )
		{


		?>



		<tr>
		<tr>
		<td>
		<div class="card">
		<div class="comment-avatar"><i class="glyphicon glyphicon-user opacity-100"></i></div>
		<div class="card-body">


		<nav  >
		<div class="nav-wrapper green darken-4">


		<ul >
		<li class="left hide-on-med-and-down"><h4><?php echo $row['fullname'];     ?></h4> </li>
		<li class="right hide-on-med-and-down">
		<ul class="nav">
		<li >
		<?php if($usid==$row['user_id']){ ?>
		<a href="#" style="color: black">More Option</a>
		<ul>
		<li><a  href="postedit.php?post_id=<?php 
		if($usid==$row['user_id'])
		{echo $row['post_id'];}
		else
		{echo "no permission"; 

		} 
		 ?>" >Edit Post</a></li>
		<li><a  href="postdelete.php?post_id=<?php

		 if($usid==$row['user_id'])
		{echo $row['post_id'];}
		else
		{echo "no permission"; 
		 
		} 

		 ?>" >Delete Post</a></li>

		</ul>
		</li>
		<?php } ?>

		</ul>
		</li>
		</ul>
		</div>
		</nav>


		<hr>
		<b><p><?php echo date('d-m-Y h:m A', strtotime($row['date_time']));?></p> </b>
		<h6><?php echo ucfirst($row['details']);     ?></h6>
		<hr>
		<h6><b>Comments</b></h6>
		<hr> 
		<?php
		$comments = mysqli_query($conn, "select com.comment_id, com.comment, com.user_id, u.fullname,com.date_time from comment com INNER JOIN userinfo u ON com.user_id = u.id where com.post_id = '".$row['post_id']."'");
		if(mysqli_num_rows($comments) > 0){
		while ($datas = mysqli_fetch_array($comments)) {
		?>
		<h6><b> <?php echo $datas['fullname'];?></b></h6>

		<p><?php echo ucfirst($datas['comment']); ?></p>
		<?php if($usid==$datas['user_id']){ ?>
		<a href="commentedit.php?comment_id=<?php
		if($usid==$datas['user_id'])
		{echo $datas['comment_id'];}
		else
		{echo "no permission"; 
			
		}                                 
		?>" >Edit</a>
		<a href="commentdelete.php?comment_id=<?php 
		if($usid==$datas['user_id'])
		{

		echo $datas['comment_id'];}
		else
		{echo "no permission"; 

		}
		?>" >Delete</a>

		<?php
		}}
		}
		?>                                                         
		<p>
		</div>

		<a class="waves-effect waves-light btn green darken-4" href="Comment.php?post_id=<?php echo $row['post_id'];?>" >Comment</a>

		</div>


		</td>
		</tr>







		</tr>




		<?php  } ?> 
		</table>


		<ul class="pagination pagination-lg">
		<li><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
		<li><a href="profile.php">1</a></li>
		<li><a href="profile_1.php">2</a></li>
		<li><a href="profile_2.php">3</a></li>
		<li><a href="profile_3.php">4</a></li>
		<li><a href="profile_4.php">5</a></li>
		<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
		</ul>
		</div>

		</div>


		<!-- Category LIST-->

		<div class="col s12 m3  ">
					<?php 
					      $sql="SELECT * FROM event ORDER BY event_id DESC limit 1;";

					      if(!($result=mysqli_query($conn,$sql)))
					      {
					        echo "error".mysqli_error($conn);
					        exit;
					      }
					      if(mysqli_num_rows($result)>0)
					        while ($row=mysqli_fetch_assoc($result) )
					        {  
						          ?>
							<h5><p><?php echo $row['event_name']; ?> </p></h5>

							<p>
							<?php echo $row['event_detail']; ?> 
					</p>
					<?php } ?>
		</div>
</div>

<footer class="page-footer green darken-4">
<div class="container">
<div class="row">
<div class="col l6 s12">
<h5 class="white-text">Alumni Managment</h5>
<!-- <p class="grey-text text-lighten-4">Keep using this website for communication </p> -->
</div>
<div class="col l4 offset-l2 s12">


</div>
	</div>
</div>
<div class="footer-copyright">
<div class="container">
 © 2016 Copyright Sharif

</div>
</div>
</footer>


</div>





<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>



</body>

</html>






