<?php
    include '../db_connect.php';

    include './shared/header.php';
    if ($_SESSION["userid"] == null) {
        header("location: ./login.php");
    }else {
        include './layouts/v_thanh-toan.php';
        include './shared/footer.php';
    }
?>