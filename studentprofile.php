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
  <div class="section">
    <div class="row">
      <nav>
        <div class="nav-wrapper green darken-4">
          <img src="img/iubat.png" align="right" style="margin-right:30px;" height="100">
          <a href="img/iubat.png" class="brand-logo">Alumni</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="student.php">Home</a></li>

            <li><a href="user.php">Users</a></li>
            <li><a href="student.php">Job</a></li>

            <!-- Dropdown Trigger -->

            <li><a href="logout.php?id=<?php echo $usid; ?>">logout</a></li>
          </ul>
        </div>
      </nav>
      <div class="container">


        <?php
        include_once('link.php');
        ?>

        <table>
          <thead>
            <tr>
              <th data-field="id">Fullname</th>
              <th data-field="name">Email</th>
              <th data-field="price">Department</th>

              <th data-field="price">Username</th>
              <th data-field="price">Passward</th>



            </tr>
          </thead>
          <?php 

// query to database for update
          if(!empty($_REQUEST['id']))
          {
            $id= $_REQUEST['id'];
            $sql="SELECT * FROM studentinfo where id='$id' ;";


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




                <tr>
                  <td><?php echo $row['fullname']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['department']; ?></td>

                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo $row['passward']; ?></td>



                  <td><a  href="studentprofileedit.php?id=<?php echo $row['id'];?>" class="waves-effect waves-light btn">Edit</a></td>



                </tr>

                <?php  }}} ?>


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </body>