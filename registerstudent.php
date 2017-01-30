<!DOCTYPE HTML>
<html>
<head>
  <title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Register :: w3layouts</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function   hideURLbar(){ window.scrollTo(0,1); }
  </script>
  <link href="csss/bootstrap.min.css" rel='stylesheet' type='text/css' />
  <link href="csss/style.css" rel='stylesheet' type='text/css' />
  <link href="csss/font-awesome.css" rel="stylesheet"> 
  <script src="jss/jquery.min.js"></script>
  <script src="jss/bootstrap.min.js"></script>
  <script>
    function myFunction()
    {
      alert("If you Fillup all the requirment please wait for corfirmation"); 
    }
  </script>
  <script type="text/javascript" src="js/validation.js"></script>
</head>
<body id="login">
  <div class="login-logo">

  </div>
  <h2 class="form-heading">Student Registration</h2>
  <form class="form-signin app-cam"onsubmit="return validateForm(this);" action="registrationdb_2.php" method="post" enctype="multipart/form-data">
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
    <lebel>Passing year Optional for current student</lebel>
    <input type="date" class="form-control1" placeholder="Passing year Optional"  name="passing_year">
    <input type="text" class="form-control1"required="required" placeholder="Username " autofocus="" name="username">
    <input type="password" class="form-control1"required="required" placeholder="Passward" autofocus="" name="passward">

    <div class="form-group">
      <select type="text" id="selector1"required="required" class="form-control1" name="type">
        <option> Type</option>

        <option value="3" >Student</option>


      </select>
      <label>Upload image</label>
      <input type="file" class="form-control1"required="required" placeholder="Full Name" autofocus="" name="image">
    </div>



    <button class="btn btn-lg btn-success1 btn-block"onclick="myFunction()" type="submit" name="submit">Submit</button>
    <div class="registration">
      Already Registered.
      <a class="" href="index.php">
        Login
      </a>
    </div>
  </form>
  <div class="copy_layout login register">
    <p>Copyright &copy; 2016 Sharif. All Rights Reserved | </p>
  </div>
</body>
</html>
