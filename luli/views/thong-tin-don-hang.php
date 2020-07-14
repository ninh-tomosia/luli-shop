<?php
    include '../db_connect.php';

    include './shared/header.php';
    if ($_SESSION["userid"] == null) {
        header("location: ./login.php");
    }else {
        include './layouts/v_don-hang.php';
        include './shared/footer.php';
    }
?>