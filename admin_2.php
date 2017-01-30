<?php 
include_once'link.php';
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
        <h3 align="center">User Pannel </h3>
       
            <div class="row">
                
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
        <div class="panel-heading">
          <h2>View All Users</h2>
          <div class="panel-ctrls" data-actions-container="" data-action-collapse="{&quot;target&quot;: &quot;.panel-body&quot;}"><span class="button-icon has-bg"><i class="ti ti-angle-down"></i></span></div>
        </div>
        <div class="panel-body no-padding" style="display: block;">
          <table class="table table-striped">
            <thead>
              <tr class="warning">
                <th>Sl</th>
               <!--  <th>ID</th> -->
                <th>user id</th>
                <th>fullname</th>
                <th>email</th>
                <th>batch</th>
                <th>year</th>
                <th>is_active</th>
                <th>Status</th>
                <th>Active/Deactive</th>

                <th>Action</th>
               
              </tr>
            </thead>
            <?php 
              $sql="SELECT * FROM userinfo ORDER BY id DESC;";
              
              if(!($result=mysqli_query($conn,$sql)))
              {
                echo "error".mysqli_error($conn);
                exit;
              }
              if(mysqli_num_rows($result)>0)
              while ($row=mysqli_fetch_assoc($result) )
              {
           ?>
            <tbody>
              <td><?php echo $row['id'];   ?></td>
              <td><?php echo $row['user_id'];     ?></td>
              <td><?php echo $row['fullname'];    ?></td>
              <td><?php echo $row['email'];    ?></td>
              <td><?php echo $row['batch'];    ?></td>
              <td><?php echo $row['year'];    ?></td>
              <td><?php echo $row['type'];    ?></td>
              <td><?php echo $row['is_active'];    ?></td>
              <td><a href="acceptjoin.php?id=<?php echo $row['id'];?>" >Change Is_active<br> status</a></td>
              <td><a href="acd.php?id=<?php echo $row['id'];?>" >Delete User</a></td>
              
            </tbody>
            <?php  } ?> 
          </table>
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
