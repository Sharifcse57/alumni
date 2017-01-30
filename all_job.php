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




$sql="SELECT * FROM job ORDER BY job_id DESC ;";
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
<li><a href="#">Jobs</a></li>


<li><a href="logout.php?id=<?php echo $usid; ?>">logout</a></li>
</ul>
</div>
</nav>
<div class="section">
	<div class="container">
		<div class="row">
			<div> 
<?php 
      $sql="SELECT * FROM job ORDER BY job_id DESC ;";

      if(!($result=mysqli_query($conn,$sql)))
      {
        echo "error".mysqli_error($conn);
        exit;
      }
      if(mysqli_num_rows($result)>0)
        while ($row=mysqli_fetch_assoc($result) )
        {  
          ?>
   

    <h5 class="green grey lighten-2"><?php echo $row['job_title'] ?></h5>
    <b><?php echo $row['post_of_job'] ?></b><br>

	<b>Education :</b> <?php echo $row['education'] ?>
	<br>
	<b>Experience :</b><?php echo $row['experience'] ?>
	<br>
	<!-- <b>Dead Line  :</b><?php echo $row['date'] ?><br> -->
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
	<b>Contact Number :<?php echo $row['contact'] ?></b><br>

	<?php } ?>

	<br>
	
	
</div>
		</div>
	</div>
</div>






</body>