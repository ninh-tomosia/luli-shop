<?php
    session_start();
    $id = $_GET['id'];
    if($_SESSION != null){
        if($_SESSION['adminid'] == $id){
            session_unset();
            header("Location: /luli/admin/");
        }else{
            header("Location: /luli/admin/views/index.php");
        }
    }else{
        header("Location: /luli/admin/views/index.php");
    }
?>