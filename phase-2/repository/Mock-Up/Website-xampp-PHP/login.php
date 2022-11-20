<?php
session_start();
include "config-page.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/menu.js" type="text/javascript"></script>
    <title><?php echo $title; ?></title>
</head>

<body>
    <style>
        #log {
            margin-top: 7%;
            margin-left: 20%;
            margin-right: 20%;
            margin-bottom: 5%;
            background-color: #F9D923;
            border: 2px solid transparent;
            border-radius: 20px;
            color: black;
        }

        #log:hover {
            box-shadow: 7px 15px 1rem 5px #8962fddd !important;
            transition: 0.8s all ease;
        }

        #form_login {
            padding-top: 5%;
            padding-bottom: 5%;
            padding-left: 10%;
            padding-right: 10%;
        }

        #form_login p a {
            text-decoration: none;
            color: blue;
        }

        #form_login p a:hover {
            text-decoration: none;
            color: red;
        }

        #breadcrumbs {
            background-color: slateblue;
            border: 0px solid transparent;
            border-radius: 10px;
            padding-left: 20px;
        }

        ol.breadcrumb li a {
            text-decoration: none;
            color: white;
        }

        ol.breadcrumb li.breadcrumb-item.active {
            color: greenyellow;
        }
    </style>
    <?php require "navbar.php"; ?>
    <div id="log">
        <form id="form_login" action="fuction_log.php" method="POST">
            <div aria-label="breadcrumb" id="breadcrumbs">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">หน้าแรก</a></li>
                    <li class="breadcrumb-item active" aria-current="page">เข้าสู่ระบบ</li>
                </ol>
            </div>
            <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if (isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
            <p>
                <label for="emaill">อีเมลล์</label>
                <input type="text" id="emaill" name="emaill" class="form-control" placeholder="อีเมลล์" />
            </p>
            <p>
                <label for="passwordl">รหัสผ่าน</label>
                <input type="password" id="passwordl" name="passwordl" class="form-control" placeholder="รหัสผ่าน" />
            </p>
            <p align="center">
                <button id="submitbutton" name="submitbutton" class="btn btn-primary" type="submit">เข้าสู่ระบบ</button><br>
                หากท่านใดยังไม่เคยสมัครสมาชิก สามารถเข้าสุ่ระบบได้ที่นี่ <a href="register.php">คลิ๊ก</a>
            </p>
        </form>
    </div>
    <!-- script css framework --->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>