<?php 
require 'link.php';
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
        <h3 align="center">Event Pannel </h3>
        
            <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
          <h2>View All Events</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
          <?php 
      $sql="SELECT * FROM event ORDER BY event_id DESC ;";

      if(!($result=mysqli_query($conn,$sql)))
      {
        echo "error".mysqli_error($conn);
        exit;
      }
      if(mysqli_num_rows($result)>0)
        while ($row=mysqli_fetch_assoc($result) )
        {  
          ?>
          
    
     <b>Serial :</b> <?php echo $row['event_id'] ?> <br>    
  <b>Event Title :</b> <?php echo $row['event_name'] ?>
  <br>
  <b>Event Details :</b><?php echo $row['event_detail'] ?>
 
  <!-- <b>Submitting date :</b><?php echo $row['date'] ?> -->
  <br><br>
  <td><a href="acd_3.php?id=<?php echo $row['event_id'];?>" >Delete </a></td>
<br><br><br>
  

  <?php } ?>
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
