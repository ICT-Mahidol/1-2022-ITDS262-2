<?php
session_start();
include "config-page.php";
?>
<?php if (isset($_SESSION["user_login"]) || (isset($_SESSION["admin_login"]))) {
    header("Refresh:0;url=index.php");
    echo '<script language="javascript">';
    echo 'alert("การจองไว้ให้ท่านเรียบร้อยแล้ว")';
    echo '</script>';
} else {
    header("Refresh:0;url=login.php");
    echo '<script language="javascript">';
    echo 'alert("กรุณาเข้าสู่ระบบสมาชิก")';
    echo '</script>';
}
?>