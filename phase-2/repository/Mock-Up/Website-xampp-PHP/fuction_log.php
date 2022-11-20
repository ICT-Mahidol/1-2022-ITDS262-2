<?php
    session_start();
    require_once "config-page.php";
    if (isset($_POST['submitbutton'])) {
        $emaill = $_POST['emaill'];
        $password = $_POST['passwordl'];

        if(empty($emaill)){
            $_SESSION['error'] = 'กรุณากรอก username';
            header('location: login.php');
        } else if (empty($password)) {
            $_SESSION['error'] = 'กรุณากรอก password';
            header('location: login.php');
        } else {
            try{
                $check_data = $conn->prepare("SELECT * FROM users WHERE email = :emaill");
                $check_data->bindParam(":emaill", $emaill);
                $check_data->execute();
                $row = $check_data->fetch(PDO::FETCH_ASSOC);
                if ($check_data->rowCount() > 0) {
                    if($emaill == $row['email']) {
                        if($row['password'] == base64_encode($password)) {
                            if($row['status'] == 1) {
                                $_SESSION['error'] = 'ตอนนี้มีการเข้าใช้งาน : '.$emaill. "อยู่";
                            } else {
                                $change_status = $conn->prepare("UPDATE users SET status='1' WHERE email = :emaill");
                                $change_status->bindParam(":emaill", $emaill);
                                $change_status->execute();
                                $status_row = $change_status->fetch(PDO::FETCH_ASSOC);
                                if ($row['staff'] == 'admin') {
                                    $_SESSION['admin_login'] = $row['username'];
                                    header("location: index.php");
                                } else {
                                    $_SESSION['user_login'] = $row['username'];
                                    header("location: index.php");
                                }
                            }
                        } else {
                            $_SESSION['error'] = 'password ไม่ถูกต้อง';
                            header("location: login.php");
                        }
                    } else {
                        $_SESSION['error'] = 'username ไม่ถูกต้อง';
                        header("location: login.php");
                    }
                } else {
                    $_SESSION['error'] = 'ไม่พบข้อมูลสมาชิก';
                    header("location: login.php");
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }
?>