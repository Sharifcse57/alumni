<?php 
require 'link.php';
session_start();
// $username=$_SESSION['username']; 


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
<script src="jss/bootstrap.min.js"></script>
<script src="jss/jquery.min.js"></script>
<script src="jss/f.js"></script>
<link href="csss/font-awesome.css" rel="stylesheet"> 
<link href="csss/g.css" rel="stylesheet"> 
<script type="text/javascript">
	 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
</script>
</head>
<body>
	
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
<li><a href="job.php">Jobs</a></li>


<li><a href="logout.php?id=<?php echo $usid; ?>">logout</a></li>
</ul>
</div>
</nav>


<div class="section">
	<div class="container">
		<div class="row">
			<div class="container">
			<div class="container">
			<form action="job_op.php" method="post">
				<div class="form-group">
				  <label for="usr">Job Title</label>
				  <input type="text" class="form-control" name="title" >
				</div>
				<div class="form-group">
				  <label for="pwd">Post of Job</label>
				  <input type="text" class="form-control" name="post">
				</div>
				<div class="form-group">
				  <label for="pwd">Education Qualification</label>
				  <input type="text" class="form-control" name="edu">
				</div>
				<!-- <div class="form-group">
				  <label for="comment">Comment:</label>
				  <textarea class="form-control" rows="5" id="comment"></textarea>
				</div> -->
				<div class="form-group">
				  <label for="pwd">Experience</label>
				  <input type="text" class="form-control" name="exp">
				</div>
				<div class="form-group">
				  <label for="pwd">Deadline</label>
				  <input type="date" class="datepicker" name="date">
				</div>
				<div class="form-group">
				  <label for="pwd">Contact Number</label>
				  <input type="number" class="form-control" name="contact">
				</div>
				<button class="btn-success btn" name="submit">Submit</button>
			</form>
			</div>
			</div>

		</div>

	</div>
	
</div>

</body>