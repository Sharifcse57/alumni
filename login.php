


<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Login</title>

		<!-- BEGIN META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="your,keywords">
		<meta name="description" content="Short explanation about this website">
		<!-- END META -->

		<!-- BEGIN STYLESHEETS -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/bootstrap.css?1422792965" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/materialadmin.css?1425466319" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/font-awesome.min.css?1422529194" />
		<link type="text/css" rel="stylesheet" href="assets/css/theme-default/material-design-iconic-font.min.css?1421434286" />
		
	</head>
	<body class="menubar-hoverable header-fixed ">
	

		<!-- BEGIN LOGIN SECTION -->
		<section class="section-account">
			<div class="img-backdrop" style="background-image: url('assets/img/img16.jpg')"></div>
			<div class="spacer"></div>
			<div class="card contain-sm style-transparent">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<br/>
							<span class="text-lg text-bold text-primary">MATERIAL ADMIN</span>
							<br/><br/>
							<form class="form floating-label" action="session.php"  method="post">
								<div class="form-group">
									<input type="text" class="form-control"  name="username">
									<label for="username">Username</label>
								</div>
								<div class="form-group">
									<input type="password" class="form-control"  name="password">
									<label for="password">Password</label>
									
								</div>
								<div class="form-group">
												
												 <select class="form-control" name="type">
																    <option value="0" >Admin</option>
																    <option value="1">Administrator</option>
																    <option value="2">User</option>
																
																   
																  
												 </select>
												<label for="Username1">Type</label>
											</div>
							
							
								
									
								<button class="btn btn-primary btn-raised" type="submit" name="submit">Login</button>
						
							</form>
						</div><!--end .col -->
						<div class="col-sm-5 col-sm-offset-1 text-center">
							<br><br>
								<h3 class="text-light">
									No account yet?
								</h3>
								<a class="btn btn-block btn-raised btn-primary" href="registration.php">Sign up here</a>
								<br><br>
									
									
									
								</div>
							</div>
						</div>
					</div>
				</section>
				

			
				<script src="assets/js/libs/jquery/jquery-1.11.2.min.js"></script>
				<script src="assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
				<script src="assets/js/libs/bootstrap/bootstrap.min.js"></script>
				<script src="assets/js/libs/spin.js/spin.min.js"></script>
				<script src="assets/js/libs/autosize/jquery.autosize.min.js"></script>
				<script src="assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
				<script src="assets/js/core/source/App.js"></script>
				<script src="assets/js/core/source/AppNavigation.js"></script>
				<script src="assets/js/core/source/AppOffcanvas.js"></script>
				<script src="assets/js/core/source/AppCard.js"></script>
				<script src="assets/js/core/source/AppForm.js"></script>
				<script src="assets/js/core/source/AppNavSearch.js"></script>
				<script src="assets/js/core/source/AppVendor.js"></script>
				<script src="assets/js/core/demo/Demo.js"></script>
			

			</body>
		</html>
