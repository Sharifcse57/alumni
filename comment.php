<?php
require'link.php';
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
<script type="text/javascript">
  $(document).ready(function() {
    $(.characterCounter();
</script>
</head>

<body class="grey lighten-4" style="min-height:500px">
<?php 
if(!empty($_REQUEST['post_id']))
{
  $post_id= $_REQUEST['post_id'];
  $sql="SELECT post_id,details FROM post where post_id='$post_id' ;";


  if (!($result=mysqli_query($conn, $sql))) {

    echo "Error creating database: " . mysqli_error($conn);
    exit;
  }

  if (mysqli_num_rows($result) > 0)
  {
// output data of each row
    if($row = mysqli_fetch_assoc($result)) 
    {     

      session_start();
      $_SESSION['post_id']=$row['post_id'];


      ?>


   
      <div class="section">
        <div class="row">
        
        <div class="col s12 m3 ">.</div>
           <div class="col s12 m6 ">
             <p><?php echo $row['details'];  ?></p>

            <form action="commentop.php" method="post">
              <label for="textarea1">Commnet it</label>
              <textarea id="textarea1" class="materialize-textarea" name="comment" length="250"></textarea>

              <button class="waves-effect waves-light btn" type="submit" name="submit">submit</button>

            </form>
           </div>
            <div class="col s12 m3 "></div>

        </div>
      </div>
      
     



      <?php }}} ?>

  </body>
  </html>     


