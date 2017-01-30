<?php 
require 'link.php';
session_start();
// if (!empty($_SESSION["usid"]))
// {   
//   header("location: profile.php");
//   exit;
// }

if (isset($_REQUEST['submit']) && $_REQUEST['username'] !="" && $_REQUEST['passward'] !="") 
{
  $username = $_REQUEST['username'];
  $passward = $_REQUEST['passward'];
  $type = $_REQUEST['type'];

  switch($type)
  {
    case '2':
    {
      $query = "SELECT id,username,passward, is_active FROM userinfo WHERE username='".$username."' AND passward='".$passward."' ";
      $result = mysqli_query($conn,$query);
      $num = mysqli_num_rows($result);
      if ($num == 1) 
      {

        if ($rows = mysqli_fetch_assoc($result)) 
        {
          if($rows['is_active']!='0'){
            session_start();
            $_SESSION['usid'] = $rows['id'];
            $_SESSION['username']= $rows['username']; 


            header("location:profile.php");
          }
          else
          {
            header("location:index.php?error=2");
          }
        }
      }
      else
      {
        header("location:index.php?error=1");
      }
      break;
    }
    case '3':
    {
      $query = "SELECT id,username,passward, is_active FROM studentinfo WHERE username='".$username."' AND passward='".$passward."' ";
      $result = mysqli_query($conn,$query);
      $num = mysqli_num_rows($result);
      if ($num == 1) 
      {

        if ($rows = mysqli_fetch_assoc($result)) 
        {
          if($rows['is_active']!='0'){
            session_start();
            $_SESSION['usid'] = $rows['id'];
            $_SESSION['username']= $rows['username']; 


            header("location:student.php");
          }
          else
          {
            header("location:index.php?error=2");
          }
        }
      }
      else
      {
        header("location:index.php?error=1");
      }
      break;
    }

    case '0':
    {
      $query = "SELECT * FROM admin WHERE username='".$username."' AND passward='".$passward."' AND type='".$type."'";
      $result = mysqli_query($conn,$query);
      $num = mysqli_num_rows($result);
      if ($num > 0) 
      {
        if ($rows = mysqli_fetch_assoc($result)) 
        {

          session_start();
          $_SESSION['usid'] = $rows['admin_id'];
          $_SESSION['username']= $rows['username']; 
          $_SESSION['passward']= $rows['passward']; 
          header("location:admin.php");

        }
        else
        {
          header("location:index.php?error=2");
        }
      }
      else
      {
        header("location:index.php?error=1");
      }
      break;
    }

    case '1':
    {
      $query = "SELECT * FROM administrator WHERE username='".$username."' AND passward='".$passward."' AND type='".$type."'";
      $result = mysqli_query($conn,$query);
      $num = mysqli_num_rows($result);
      if ($num > 0) 
      {

        if ($rows = mysqli_fetch_assoc($result)) 
        {

          session_start();
          $_SESSION['usid'] = $rows['administrator_id'];
          $_SESSION['username']= $rows['username']; 
          $_SESSION['passward']= $rows['passward']; 
          header("location:administrator.php");

        }
        else
        {
          header("location:index1.php?error=2");
        }
      }
      else
      {
        header("location:index.php?error=1");
      }
      break;
    }
    default: 
    {
      header("location:index.php?error=4");
    }
  }
}
else
{ 
  header("location:index.php?error=3");
  exit;

}
?>     









