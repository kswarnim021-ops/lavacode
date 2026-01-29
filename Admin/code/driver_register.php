<?php
include './db_connect.php';

if (isset($_POST['driver_btn'])) {

    // Form values
    $name       = $_POST['name'];
    $phone      = $_POST['phone'];
    $license_no = $_POST['license_no'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];
    $cpassword  = $_POST['cpassword'];
    $address    = $_POST['address'];

    // Password match check
    if ($password !== $cpassword) {
        die("Error: Password and Confirm Password do not match!");
    }

    // Password hashing
    // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

   // Profile Image

if (!empty($_FILES['profile_image']['name'])) {
    $target_dir = "../assets/images/driver_image/"; // folder jaha upload karna hai
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true); // folder banado agar nahi hai
    }
    $profile_image = time() . "_" . basename($_FILES['profile_image']['name']);
    if (!move_uploaded_file($_FILES['profile_image']['tmp_name'], $target_dir . $profile_image)) {
        die("Error: Profile image not uploaded. Code: " . $_FILES['profile_image']['error']);
    }
}

// License Image

if (!empty($_FILES['license_image']['name'])) {
    $target_dir = "../assets/images/driver_license/"; // folder jaha upload karna hai
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $license_image =  time() . "_" . basename($_FILES['license_image']['name']);
    if (!move_uploaded_file($_FILES['license_image']['tmp_name'],  $target_dir .$license_image)) {
        die("Error: License image not uploaded. Code: " . $_FILES['license_image']['error']);
    }
}


    // Insert query
    $sql = "INSERT INTO drivers (name, phone, license_no, email, password, address, profile_image, license_image) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $name, $phone, $license_no, $email, $password, $address, $profile_image, $license_image);

    if ($stmt->execute()) {
        echo "<script>window.location.href='../user-all.php';alert('✅Driver registered successfully!');</script>";
        
        exit();
    } else {
        echo "❌ Error: " . $stmt->error;
    }
}
