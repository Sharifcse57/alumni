<?php 
require 'link.php';
session_start();
$username=$_SESSION['username']; 
echo  $username; 
echo "<br>";
$id=$_SESSION['usid'];
echo $id;
if (empty($_SESSION["usid"]))
{  
  header("location:index.php");

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
<body style="min-height:500px">

  <nav  >
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
    <div class="row">




      <div class="col s12 m3   center-align">
        <h4><p>Jobs </p></h4>   
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </div>


        <div class="col s12 m6 ">
          <b><p> Alumni and Student Conversation </p></b>
          <div class="row ">




            <table class="table" border="1">
              <thead>
                <th>Post From Alumni</th>



              </thead>
              <?php 
              $sql="SELECT userinfo.fullname, post.details, post.date_time, post.post_id
              FROM userinfo
              INNER JOIN post
              ON userinfo.id=post.user_id ORDER BY post_id DESC;";

              if(!($result=mysqli_query($conn,$sql)))
              {
                echo "error".mysqli_error($conn);
                exit;
              }
              if(mysqli_num_rows($result)>0)
                while ($row=mysqli_fetch_assoc($result) )
                {
                  ?>



                  <tr>
                    <tr>
                      <td>

                        <h4><?php echo $row['fullname']; ?></h4>
                        <p><?php echo $row['details'];     ?></p>

                        <form action="comment.php" method="post">
                          <label for="textarea1">Comment</label>
                          <input placeholder="Comment" id="first_name" type="text" class="validate" name="comment">

                          <button class="waves-effect waves-light btn" type="submit" name="submit">Comment</button>

                        </form>



                      </td>
                    </tr>







                  </tr>




                  <?php  } ?> 
                </table>



              </div>

            </div>


            <!-- Category LIST-->

            <div class="col s12 m3  ">
              <h4><p>Iubat Event </p></h4>

              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

              </div>
            </div>

            <footer class="page-footer green darken-4">

              <div class="footer-copyright">
                <div class="container">
                  Made by <a class="orange-text text-lighten-3" href="#">SHARIF</a>
                </div>
              </div>
            </footer>


          </div>





          <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
          <script src="js/materialize.js"></script>
          <script src="js/init.js"></script>



        </body>

        </html>






