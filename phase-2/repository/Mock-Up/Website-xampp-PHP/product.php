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
        #menu-api {
            text-decoration: none;
            color: blue;
        }

        #menu-api:hover {
            text-decoration: none;
            color: black;
            transition: 0.7s all ease;
        }
    </style>
    <?php require "navbar.php"; ?>
    <?php
    $pro_stmt = $conn->prepare("SELECT * FROM Product WHERE P_ID = " . $_GET['id']);
    $pro_stmt->execute();
    $row = $pro_stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="container px-4 py-5 my-5 shadow-lg bg-light" id="featureweb">
        <h2 class="pb-2"><?php echo $row['P_NAME']; ?></h2>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="d-flex flex-column align-items-start gap-2">
                <h3 class="fw-bold"><?php echo $row['P_DETAIL']; ?></h3>
                <h5 class="fw-bold"><?php echo $row['P_PRICE']; ?> บาท</h5>
                <a href="test.php" class="btn btn-primary btn-lg">book now</a>
            </div>
            <div class="row">
                <img src="product/images/<?php echo $row['P_IMAGES']; ?>" width="100%" height="300">
            </div>
        </div>
    </div>
    <!-- script css framework --->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>