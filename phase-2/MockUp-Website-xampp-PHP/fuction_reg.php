<?php
    session_start();
    require_once "config-page.php";
    if(isset($_POST['bregister'])) {
        $usernamer = $_POST['usernamer'];
        $passwordr = $_POST['passwordr'];
        $emailr = $_POST['emailr'];
        $paymentr = $_POST['paymentr'];
        $paymenter = $_POST['paymenter'];
        $urole = 'user';

        if(empty($usernamer)){
            $_SESSION['error'] = 'กรุณากรอก username';
            header('location: register.php');
        } else if (empty($passwordr)) {
            $_SESSION['error'] = 'กรุณากรอก password';
            header('location: register.php');
        } else if (empty($emailr)) {
            $_SESSION['error'] = 'กรุณากรอก email';
            header('location: register.php');
        } else if (!filter_var($emailr, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'รูปแบบ email ไม่ถูกต้อง';
            header('location: register.php');
        } else if (strlen($_POST['passwordr']) > 20 || strlen($_POST['passwordr']) < 5) {
            $_SESSION['error'] = 'รหัสต้องอยุ่ระหว่าง 5 ถึง 20 ตัวอักษร';
            header('location: register.php');
        } else {
            try {
                $check_data = $conn->prepare("SELECT * FROM users WHERE email = :emailr");
                $check_data->bindParam(":emailr", $emailr);
                $check_data->execute();
                $row = $check_data->fetch(PDO::FETCH_ASSOC);
                if($emailr == $row['email']) {
                    $_SESSION['error'] = "มีอีเมลอยู่ในระบบฐานข้อมูลอยู่แล้ว";
                    header("location: register.php");
                } else if (!isset($_SESSION['error'])) {
                    $passwordhash = base64_encode($passwordr);
                    $stmt = $conn->prepare("INSERT INTO users(username, password, email, staff, payment, payment_date)
                                            VALUES(:usernamer, :passwordr, :emailr, :staff, :payment, :payment_date)");
                    $stmt->bindParam(":usernamer", $usernamer);
                    $stmt->bindParam(":passwordr", $passwordhash);
                    $stmt->bindParam(":emailr", $emailr);
                    $stmt->bindParam(":staff", $urole);
                    $stmt->bindParam(":payment", $paymentr);
                    $stmt->bindParam(":payment_date", $paymenter);
                    $stmt->execute();
                    $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว !!";
                    header("location: login.php");
                } else {
                    $_SESSION['error'] = "มีบางอย่างผิดพลาด";
                    header("location: register.php");
                }
            } catch(PDOException $e) {
                $_SESSION['error'] = "มีบางอย่างผิดพลาด กรุณาติดต่อทีมงาน";
                header("location: register.php");
            }
        }
    }
?>