<?php
        include_once('link.php');
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
  <style type="text/css">
  .main{
    margin-top: 100px;
  }
  </style>
  <script src="jss/init.js"></script>
</head>
<body>
  <div class="section">
    <div class="row">
      <nav>
        <div class="nav-wrapper green darken-4">
          <img src="img/iubat.png" align="right" style="margin-right:30px;" height="100">
          <a href="img/iubat.png" class="brand-logo">Alumni</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="profile.php">Home</a></li>

            <li><a href="user.php">Users</a></li>
            <li><a href="all_job.php">Jobs</a></li>

            <!-- Dropdown Trigger -->

            <li><a href="logout.php?id=<?php echo $usid; ?>">logout</a></li>
          </ul>
        </div>
      </nav>
     
          <div class="section">
                <div class="container">
                       <div class="row main">
                        <?php 


                            if(!empty($_REQUEST['id']))
                            {
                              $id= $_REQUEST['id'];
                              $sql="SELECT * FROM userinfo where id='$id' ;";


                              if (!($result=mysqli_query($conn, $sql)))
                              {

                                echo "Error creating database: " . mysqli_error($conn);
                                exit;
                              }

                              if (mysqli_num_rows($result) > 0) 
                              {
                                while($row=mysqli_fetch_assoc($result)) 
                                {


                                  ?>
                                 <div class="col s12 m4"><img src="<?php echo $row['image'] ?>" height="150px"></div> 
                                 <div class="col s12 m8">
                                       <b>Fullname :</b><?php echo $row['fullname']; ?>
                                       <br>
                                       <br>
                                       <b>Email :</b><?php echo $row['email']; ?>
                                       <br>
                                       <br>
                                       <b>Department :</b><?php echo $row['department']; ?>
                                       <br>
                                       <br>
                                      <b> Passing_year :</b><?php echo $row['passing_year']; ?>
                                       <br>
                                       <br>
                                      <b> Username :</b><?php echo $row['username']; ?>
                                       <br>
                                       <br>
                                      <b> Passward :</b><?php echo $row['passward']; ?>
                                       <br>

                                       <br>
                                      <b> Status :</b><?php 
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

                                        ?>
                                      <br>
                                      <br>
                                       <b> Professional Detail:<br></b><?php echo $row['professional_info']; ?>
                                      <br>
                                      <br>
                                      <br>
                                      <a  href="myprofileedit.php?id=<?php echo $row['id'];?>" class="waves-effect waves-light btn green darken-4">Edit</a>
                                        <div class="preloader-wrapper big active">

                                            
          
                             <?php  }}} ?>


                                 </div> 
                       </div>
                 </div>
          </div>
 
        

       
          </div>
        </div>
      </div>
      <footer class="page-footer green darken-4">

              <div class="footer-copyright">
                <div class="container">
                  Made by <a class="orange-text text-lighten-3" href="#">SHARIF</a>
                </div>
              </div>
            </footer>

    </body>