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
  #hotel {
    padding-left: 8%;
    padding-right: 8%;
    display: flex;
  }
</style>
<?php require "navbar.php"; ?>
<div class="row py-5" id="hotel">
<?php
$pro_stmt = $conn->prepare("SELECT * FROM Product WHERE P_TYPE = 'hotel'");
$pro_stmt->execute();
while ($row_pro = $pro_stmt->fetch(PDO::FETCH_ASSOC)) {
?>
  <div class="col-md-3 pe-2 pb-3">
    <div class="card mb-2 shadow-lg bg-white rounded">
      <img width="100%" height="225" src="product/images/<?php echo $row_pro['P_IMAGES']; ?>"></img>
      <div class="card-body">
        <h4 align="center"><?php echo $row_pro['P_NAME'] ?></h4>
        <p class="card-text"><?php echo $row_pro['P_DETAIL']; ?></p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="product.php?id=<?php echo $row_pro['P_ID'];?>" class="btn btn-sm btn-outline-primary">ดูรายละเอียด</a>
          </div>
          <div class="btn-group">
            <a><?php echo $row_pro['P_PRICE']; ?> บาท</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
</div>
    <!-- script css framework --->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>