<?php
  if(isset($_REQUEST['id']))
  {
      include("db_connect.php");
      $id=$_REQUEST['id'];
      $delete="DELETE FROM drivers WHERE id='$id'";
      if(mysqli_query($conn,$delete))
      {
          header("location:../user-all.php");
      }
      else
      {
          echo "Error: " .mysqli_error($conn);
      }
  }
  else
  {
      header("location:../user-all.php");
  }
?>