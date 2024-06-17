<?php
session_start();
require('dbconn.php');

function getUserDetails($userId) {
    global $conn;
    $sql = "SELECT * FROM `users` WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function updateUserDetails($userId, $fname, $tname, $lname, $email, $password) {
    global $conn;
    if (empty($password)) {
        $sql = "UPDATE `users` SET `fname` = ?, `tname` = ?, `lname` = ?, `email` = ? WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $fname, $tname, $lname, $email, $userId);
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE `users` SET `fname` = ?, `tname` = ?, `lname` = ?, `email` = ?, `password` = ? WHERE `id` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $fname, $tname, $lname, $email, $hashedPassword, $userId);
    }
    return $stmt->execute();
}

if (isset($_POST['update_profile'])) {
    $userId = $_SESSION['user'];
    $fname = trim($_POST['fname']);
    $tname = trim($_POST['tname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (updateUserDetails($userId, $fname, $tname, $lname, $email, $password)) {
        header("Location: ../profiel.php?success=profile_updated");
        header("Location: ../login.php");
    } else {
        header("Location: ../profiel.php?error=update_failed");
        header("Location: ../login.php");

    }
    exit();
}
?>
