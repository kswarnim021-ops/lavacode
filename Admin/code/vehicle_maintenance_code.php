<?php
  if(isset($_POST['submit'])) {
      include 'db_connect.php';

      $vehicle_no = $_POST['vehicle_no'];
      $maintenance_type = $_POST['maintenance_type'];
      $scheduled_date = $_POST['scheduled_date'];
      $status = $_POST['status'];
      $description = $_POST['description'];

      $ins="INSERT INTO vehicle_maintenance(vehicle_no, maintenance_type, scheduled_date, status, description) 
      VALUES('$vehicle_no', '$maintenance_type', '$scheduled_date', '$status', '$description')";
      if(mysqli_query($conn,$ins)){
         echo "<script>alert('Maintenance Scheduled Successfully'); window.location.href='../vehicle_maintenance.php';</script>";
      }
      else
      {
            echo "<script>alert('Error Occurred'); window.location.href='../vehicle_maintenance.php';</script>";
      }
  }
  

 ?>


