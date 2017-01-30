<?php 
session_start();
$id=$_SESSION['usid'];


$username=$_SESSION['username'];


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
  <script src="jss/jquery.min.js"></script>
  <script src="jss/bootstrap.min.js"></script>
  <script src="jss/bootstrap.min.js"></script>
</head>
<body>
  <div id="wrapper">

     <?php include'nav.php'; ?>
  <div id="page-wrapper">
    <div class="graphs">
      <div class="xs">
        <h3 align="center">User Pannel </h3>
<div class="section">       
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">   
                
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
          <h2>Add user</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
        <form onsubmit="return validateForm(this);" action="registrationdb1.php" method="post" enctype="multipart/form-data">
            <p>Enter your personal details below</p>
            <input type="text" class="form-control1"required="required" placeholder="Student ID " autofocus="" name="user_id">
            <input type="text" class="form-control1"required="required" placeholder="Full Name" autofocus="" name="fullname">
            <input type="email" class="form-control1"required="required" placeholder="Email" autofocus=""  name="email">
            <div class="form-group">
              <select type="text" id="selector1"required="required" class="form-control1" name="department">
                <option> Department </option>
                <option value="BCSE" >BCSE</option>
                <option value="BSEEE">BSEEE</option>
                <option value="BATHM">BATHM</option>
                <option value="BSAG">BSAG</option>
                <option value="BSAG">BSCE</option>

              </select>
            </div>
            <div class="form-group">
              <select type="text" id="selector1"required="required" class="form-control1" name="batch">
                <option> Batch</option>
                <option value="Spring" >Spring</option>
                <option value="Summer">Summer</option>
                <option value="Fall">Fall</option>

              </select>
            </div>

            <div class="form-group">
              <select  type="text" id="selector1"required="required" class="form-control1" name="year">
                <option> Year</option>
                <option value="2010" >2005</option>
                <option value="2010" >2006</option>
                <option value="2010" >2007</option>
                <option value="2010" >2008</option>
                <option value="2010" >2009</option>
                <option value="2010" >2010</option>
                <option value="2011" >2011</option>
                <option value="2012" >2012</option>
                <option value="2013" >2013</option>
                <option value="2014" >2014</option>
                <option value="2015" >2015</option>
                <option value="2016" >2016</option>
                <option value="2017" >2017</option>
                <option value="2018" >2018</option>
                <option value="2019" >2019</option>
                <option value="2020" >2020</option>
                <option value="2021" >2021</option>
                <option value="2022" >2022</option>
                <option value="2023" >2023</option>
                <option value="2024" >2024</option>
                <option value="2025" >2025</option>
                <option value="2026" >2026</option>

              </select>
            </div>
            <lebel>Passing year </lebel>
            <input type="date" class="form-control1"required="required" placeholder="Passing year" autofocus="" name="passing_year">
            <input type="text" class="form-control1"required="required" placeholder="Username " autofocus="" name="username">
            <input type="password" class="form-control1"required="required" placeholder="Passward" autofocus="" name="passward">

            <div class="form-group">
              <select type="text" id="selector1"required="required" class="form-control1" name="type">
                <option> Type</option>
                <option value="2" >Alumni</option>



              </select>
              <label>Upload image</label>
              <input type="file" class="form-control1"required="required" placeholder="Full Name" autofocus="" name="image">
                  
            </div>



            <button class="btn-success btn" name="submit">Submit</button>
            
          </form>
        </div>
      </div>
                    
          
        
     
</div>
</div>
<div class="col-lg-3"></div>
</div>  
  </div>
 
</div>
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- Nav CSS -->
<link href="csss/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="jss/metisMenu.min.js"></script>
<script src="jss/custom.js"></script>
</body>
</html>
