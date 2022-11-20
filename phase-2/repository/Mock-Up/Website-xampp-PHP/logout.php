<?php
    session_start();
    require_once "config-page.php";
    $change_status_admin = $conn->prepare("UPDATE users SET status='0' WHERE username = :usernamel");
    $change_status_admin->bindParam(":usernamel", $_SESSION['admin_login']);
    $change_status_admin->execute();
    $status_row_admin = $change_status_admin->fetch(PDO::FETCH_ASSOC);
    $change_status_user = $conn->prepare("UPDATE users SET status='0' WHERE username = :usernamel");
    $change_status_user->bindParam(":usernamel", $_SESSION['user_login']);
    $change_status_user->execute();
    $status_row_user = $change_status_user->fetch(PDO::FETCH_ASSOC);
    unset($_SESSION['user_login']);
    unset($_SESSION['admin_login']);
    unset($_SESSION['status']);
    session_destroy();
    header("location: index.php");
?>