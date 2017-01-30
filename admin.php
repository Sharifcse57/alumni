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
</head>
<body>
  <div id="wrapper">

    <?php include'nav.php'; ?>
  <div id="page-wrapper">
    <div class="graphs">
      <div class="xs">
        <h3 align="center">Welcome to Admin Pannel </h3>
                                         <p align="center"id="demo"></p>

                                          <script>
                                          var myVar=setInterval(function(){myTimer()},1000);

                                          function myTimer() {
                                              var d = new Date();
                                              document.getElementById("demo").innerHTML = d.toLocaleTimeString();
                                          }
                                          </script>
    
            <!-- <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Donut Chart</h3>
                            </div>
                            <div class="panel-body">
                                <div id="morris-donut-chart"></div>
                                <div class="text-right">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> Transactions Panel</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                   
                                </div>
                                <div class="text-right">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
        
     
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
