<?php
include_once('link.php');


// query to database for update
if(!empty($_REQUEST['comment_id']))
{
  $comment_id= $_REQUEST['comment_id'];
  $sql="SELECT * FROM comment where comment_id='$comment_id' ";


  if (!($result=mysqli_query($conn, $sql))) {

    echo "Error creating database: " . mysqli_error($conn);
    exit;
  }

  if (mysqli_num_rows($result) > 0) {
// output data of each row
    if($row = mysqli_fetch_assoc($result)) {

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
<body class="grey lighten-4" style="min-height:500px">
<div class="section">
        <div class="row">
        <div class="col s12 m3 ">.</div>
        <div class="col s12 m6 ">
         <form action="updateopp_2.php" method="POST">

          <input type="hidden" name="comment_id" value="<?php echo $row['comment_id']; ?>"><br>
          Details:<br>
          <textarea class="materialize-textarea" type="text" name="comment" value=""><?php echo $row['comment']; ?> </textarea>



          <input type="submit" name="submit" value="Submit">
        </form>
        
        <?php }} } ?>
        </div>


 <div class="col s12 m3 "></div>
            </div>
      </div>
      </body>
      </html>