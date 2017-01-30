<?php
include_once('link.php');



if(!empty($_REQUEST['id']))
{
      $id= $_REQUEST['id'];
    	$sql="SELECT * FROM userinfo where id='$id' ;";


      if (!($result=mysqli_query($conn, $sql))) {
    
      echo "Error creating database: " . mysqli_error($conn);
      exit;
}

if (mysqli_num_rows($result) > 0) {
   
    if($row = mysqli_fetch_assoc($result)) {
 
?>
<!DOCTYPE html>
<html>
<head>
  <title>asdfasdf</title>
</head>
<body>

<form action="acceptopp.php" method="POST">
  is_active:<br>
  <input type="text" name="is_active" value="<?php echo $row['is_active']; ?>"><br>
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
 
    <input type="submit" name="submit" value="Submit">
</form>
<?php }} } ?>
</body>
</html>


