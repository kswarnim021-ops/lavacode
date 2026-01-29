<?php
session_start();
include './db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM admins WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if ($password === $user['password']) {
            $_SESSION['admin_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];


            header("Location: ../dashboard.php");
            exit;
        } else {
            echo "<script>alert('Wrong password'); window.location='../index.php';</script>";
        }
    } else {
        echo "<script>alert('User not found'); window.location='../index.php';</script>";
    }
}else{
    header("location:index.php");
    exit();
}
