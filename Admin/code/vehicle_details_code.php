<?php
if(isset($_POST['submit'])) {
    include("db_connect.php");

    $registration_no = $_POST['registration_no'];
    $vehicle_model = $_POST['vehicle_model'];
    $insurance_expiry = $_POST['insurance_expiry'];
    $permit_expiry = $_POST['permit_expiry'];
    $certificate_expiry = $_POST['certificate_expiry'];
    $pollution_expiry = $_POST['pollution_expiry'];
    $description = $_POST['description'];

    $ins="INSERT INTO vehicle_details(registration_no, vehicle_model, insurance_expiry, permit_expiry, certificate_expiry, pollution_expiry, description) 
    VALUES('$registration_no', '$vehicle_model', '$insurance_expiry', '$permit_expiry', '$certificate_expiry', '$pollution_expiry', '$description')";
    if(mysqli_query($conn,$ins)){
       echo "<script>alert('Vehicle Details Added Successfully'); window.location.href='../vehicle.php';</script>";
    }
    else
    {
          echo "<script>alert('Error Occurred'); window.location.href='../vehicle.php';</script>";
    }
}
?>