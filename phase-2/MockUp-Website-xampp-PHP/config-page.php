<?php
$title = "ทดสอบระบบทำงานconfig-page";
?>

<?php
    $servername = "localhost"; <!--- แก้ไข -->
    $username = "root"; <!--- แก้ไข -->
    $password = ""; <!--- แก้ไข -->
    $dbname = "software"; <!--- แก้ไข create database -->
    $port = "3306"; <!--- แก้ไข  deafault-->

    try {
        $conn = new PDO("mysql:host=$servername; port=$port; dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "failed :" . $e->getMessage();
    }
?>
