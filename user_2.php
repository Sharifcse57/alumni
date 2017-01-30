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

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>

  <nav>
    <div class="nav-wrapper green darken-4">
      <img src="img/iubat.png" align="right" style="margin-right:30px;" height="100">
      <!-- <a href="img/iubat.png" class="brand-logo">Alumni</a> -->
      <ul class="right hide-on-med-and-down">
        <li><a href="student.php">Home</a></li>
        <li><a href="myprofile_2.php?id=<?php echo $usid; ?>">My profile</a></li>
        <li><a href="user_2.php">Users</a></li>
      

        <!-- Dropdown Trigger -->

        <li><a href="logout.php?id=<?php echo $usid; ?>">logout</a></li>
      </ul>
    </div>
  </nav>
  <div class="section">
    <div class="container">
         <form action="search_2.php" method="post">

            <input type="text"  name="find" placeholder="Search member">


            <button  type="submit" name="submit" >search</button>
          </form>
 

      <?php 
      $sql="SELECT * FROM userinfo ORDER BY id DESC ;";

      if(!($result=mysqli_query($conn,$sql)))
      {
        echo "error".mysqli_error($conn);
        exit;
      }
      if(mysqli_num_rows($result)>0)
        while ($row=mysqli_fetch_assoc($result) )
        {  
          ?>

      
              <img src="<?php echo $row['image'] ?>" height="90px"><br>
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

                ?><br>
                <b>professional Details:</b>    <?php echo $row['professional_info'];   ?><br><hr>

          
         


        


            <?php  } ?> 
        

   

      </div>
    </div>

           









 


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

</body>

</html>
