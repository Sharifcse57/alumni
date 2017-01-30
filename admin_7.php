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
        <h3 align="center"> Event Pannel </h3>
        
            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
          <h2>Add Event</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
        <form action="event_op.php" method="post">
                <div class="form-group">
                
                        <div class="col-sm-8">
                          <input type="text" class="form-control1" id="focusedinput" placeholder="Event title " name="title">
                        </div>
                        <div class="col-sm-2">
                          <p class="help-block"></p>
                        </div>
                  </div>

                
                <div class="form-group">
                  
                  <div class="col-sm-8">
                    <textarea  type="text" class="form-control1" id="disabledinput" placeholder="Event Detail" name="detail"></textarea>
                  </div>
                </div>
                <div class="form-group">
                 
                  <div class="col-sm-8">
                    Event date :
                     <input type="date" class="form-control1" id="inputPassword" placeholder="Date" name="date">
                  </div>
                  
                  

                </div>
                 <div class="col-sm-8">
                    <button class="btn-success btn" name="submit">Submit</button>
                  </div>
       </form>
                </div>
                
        </div>
      </div>
                    </div>
                   
                    
                </div>
        
     
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
