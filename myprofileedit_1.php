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
<style type="text/css">
  .button{
    margin-top: 20px;
  }


</style>
<body>
  <nav>
    <div class="nav-wrapper green darken-4">
      <img src="img/iubat.png" align="right" style="margin-right:30px;" height="100">
      <a href="img/iubat.png" class="brand-logo">Student</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="student.php">Home</a></li>

        <li><a href="user.php">Users</a></li>
        <li><a href="all_jobs.php">Job</a></li>

        <!-- Dropdown Trigger -->

        <li><a href="logout.php?id=<?php echo $usid; ?>">logout</a></li>
      </ul>
    </div>
  </nav>
  <?php
  include_once('link.php');


// query to database for update
  if(!empty($_REQUEST['id']))
  {
    $id= $_REQUEST['id'];
    $sql="SELECT * FROM studentinfo where id='$id' ;";


    if (!($result=mysqli_query($conn, $sql))) {

      echo "Error creating database: " . mysqli_error($conn);
      exit;
    }

    if (mysqli_num_rows($result) > 0) {
// output data of each row
      if($row = mysqli_fetch_assoc($result)) { 

        ?>


        <div class="section">
          <div class="container">
            <form class="col s12" action="myprofileeditdb_2.php" method="post">
              <div class=" col s12">
                <label for="name">Full Name</label>
                <input type="text" class="validate" value="<?php echo $row['fullname']; ?>" name="fullname">

              </div>
              <div class=" col s12">
                <label for="email">Email</label>
                <input  type="email" class="validate" value="<?php echo $row['email']; ?>" name="email">

              </div>
              <div class=" col s12">
                <label for="email">Department Name</label>
                <input type="text" class="validate" value="<?php echo $row['department']; ?>" name="department" >

              </div>


              <div class=" col s12">
                <label for="email">user name</label>
                <input type="text" class="validate" value="<?php echo $row['username']; ?>" name="username">

              </div>
              <div class=" col s12">
                <label for="email">Passward</label>
                <input type="passward" class="validate" value="<?php echo $row['passward']; ?>" name="passward">

              </div>
              <div class=" col s12">

                <input type="hidden" class="validate" value="<?php echo $row['id']; ?>" name="id">

              </div>

              <div class="button col s12 ">
                <button type="submit" name="submit">submit</button>

              </div>
            </form>    

          </div>
        </div>



        <?php }} } ?>
      </body>
      </html>    












