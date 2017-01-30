<?php 
require 'link.php';
$errormessage="";
session_start();



if (!empty($_SESSION["usid"]))
{   
	header("location: profile.php");
	exit;
}

if(!empty($_GET['error']))
{
	if(($_GET['error'])=='1')
	{
		$errormessage="Username and Password not matching";
	}
	else if(($_GET['error'])=='2')
	{
		$errormessage="Profile is not active Request pending!";
	}
	else if(($_GET['error'])=='3')
	{
		$errormessage="Empty textboxs!";
	}
	else if(($_GET['error'])=='4')
	{
		$errormessage="Select type!";
	}
}
else
{
	$errormessage="";
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title> Alumni Management System </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="csss/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="csss/style.css" rel='stylesheet' type='text/css' />
	<link href="csss/font-awesome.css" rel="stylesheet">
	<script type="text/javascript" src="js/validation.js"></script>

</head>


<body id="login">
	<div class="login-logo">
		<h1 class="pt-header"> Alumni Management System </h1>
	</div>
	<h2 class="form-heading">login</h2>
	<div class="app-cam">
		<form action="session.php"  method="post">
			<input type="text" class="text" name="username"required="required" placeholder="Username" name="username">
			<input type="password" name="passward"required="required"  placeholder="passward">
			<div class="form-group">
				<select name="type" type="text" id="selector1" class="form-control1" name="type">
					<option> Select Type </option>
					<option value="0" >Admin</option>
					<!-- <option value="1">Moderator</option> -->
					<option value="2">Alumni</option>
					<option value="3">Student</option>
				</select>
			</div>
			<div class="submit"><input type="submit" name="submit" onclick="myFunction()" value="Login"></div>
			<br>
			<?php echo $errormessage; ?><br>
			<ul class="new">

				<li class="new_left"><p class="sign">New here ?<a href="newregister.php"> Sign Up</a></p></li>

				<div class="clearfix"></div>
			</ul>
		</form>
	</div>


	<div class="copy_layout login">
		<p>Copyright &copy; 2016 Sharif. All Rights Reserved  </p>
	</div>


</body>

</html>
