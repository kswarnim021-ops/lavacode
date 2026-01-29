<?php
 include("db_connect.php");
    if(isset($_POST['payment']))
    {
        $driver_id=$_POST['driver_id'];
        $license_id=$_POST['license_no'];
        $payment_date=$_POST['date'];
        $amount=$_POST['amount'];
        $method=$_POST['method'];
        $note=$_POST['note'];
        $payment_type="advance";
        $status="pending";
         
        $ins="INSERT INTO payments(driver_id,license_no,amount,payment_date,payment_type,status,method,note) 
        VALUES('$driver_id','$license_no','$amount','$payment_date','$payment_type','$status','$method','$note')";
        if(mysqli_query($conn,$ins))
        {
            echo "<script>alert('Payments save Successfully'); window.location.href='../payments.php';</script>";
        }
        else
        {
             echo "<script>alert('Error Occurred'); window.location.href='../payments.php';</script>";
        }
    }

?>