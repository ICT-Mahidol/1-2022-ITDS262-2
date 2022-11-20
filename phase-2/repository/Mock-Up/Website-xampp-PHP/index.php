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
    <?php require "navbar.php"; ?>
    <main>
        <div id="Main-page container">
        <?php require "slide.php"; ?>
        <div class="b-example-divider"></div>
        <?php require "menu.php"; ?>
        <div class="b-example-divider"></div>
        <div id="contact">
            <?php require "member.php"; ?>
        </div>
        <div class="b-example-divider"></div>
        <footer align="center" class="my-3"><h4>Copyright (R) by bankz4 development.</h4></footer>
        </div>
    </main>
    <div id="Register-page">
        <?php require "register.php"; ?>
    </div>
    <div id="Login-page">
        <?php require "login.php"; ?>
    </div>
    <div id="cars-page">
        <?php require "cars.php"; ?>
    </div>
    <div id="hotel-page">
        <?php require "hotel.php"; ?>
    </div>
    <!-- script css framework --->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>