<?php 
include_once('link.php');
?>
<?php 
require 'link.php';
session_start();
if (empty($_SESSION["usid"]))
{  
  header("location:login.php");

}
else
{
  $usid=$_SESSION["usid"];


}



$sql="SELECT * FROM userinfo WHERE id='$usid'";
$result=mysqli_query($conn,$sql);



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
</head>
<body>
  <nav>
    <div class="nav-wrapper green darken-4">
      <img src="img/iubat.png" align="right" style="margin-right:30px;" height="100">
      <a href="img/iubat.png" class="brand-logo">Alumni</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="profile.php">Home</a></li>
        <li><a href="myprofile.php?id=<?php echo $usid; ?>">My profile</a></li>
        <li><a href="user.php">Users</a></li>
        <li><a href="profile.php">Job</a></li>

       
        <li><a href="logout.php?id=<?php echo $usid; ?>">logout</a></li>
      </ul>
    </div>
  </nav>
  <div class="section">
    <div class="container">
    
       


        <?php 
        if(isset($_POST['submit']))
        {
          $search=$_POST['find'];
          $search=preg_replace("#[^0-9a-z]#i", "", $search);
          $sql="SELECT * FROM userinfo where fullname like '%$search%' or username like '%$search%'  or year like '%$search%' or batch like '%$search%' or id like '$search' or user_id like '$search' or department like '%$search%' ";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0)
          {
            while($row=mysqli_fetch_assoc($result))
            {

              ?>
             <!-- <img src="<?php echo $row['image'] ?>" height="70px"><br> --><br><br>
               fullname :<?php echo $row['fullname'];   ?><br>
               department :<?php echo $row['department'];   ?><br>
              batch :<?php echo $row['batch'];   ?><br>
              year :<?php echo $row['year'];   ?><br>
              email :<?php echo $row['email'];   ?><br>
              Status :<?php 
                $expiry_date=$row['passing_year'];
                $exp_date=strtotime($expiry_date);
                if(time()> $exp_date)
                {

                  echo "Alumni";

                }
                else
                {
                  echo "Current student";

                }

                ?><br><hr>

            <?php  }}} ?> 


          </div>
        </div>





      </body>
      </html>