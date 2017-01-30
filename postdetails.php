<?php
include_once('link.php');



if(!empty($_REQUEST['post_id']))
{
  $post_id= $_REQUEST['post_id'];
  $sql="SELECT * FROM post where post_id='$post_id' ;";


  if (!($result=mysqli_query($conn, $sql))) {

    echo "Error creating database: " . mysqli_error($conn);
    exit;
  }

  if (mysqli_num_rows($result) > 0) {
// output data of each row
    if($row = mysqli_fetch_assoc($result)) {

      ?>
      <!DOCTYPE html>
      <html>
      <head>
        <title>asdfasdf</title>
      </head>
      <body>

        <form action="updateopp.php" method="POST">
          post number:<br>
          <input type="text" name="name" value="<?php echo $row['post_id']; ?>"><br>
          Details:<br>
          <textarea type="text" name="sec" value=""><?php echo $row['details']; ?> </textarea>


          <input type="submit" name="submit" value="Submit">
        </form>
        <?php }} } ?>
      </body>
      </html>