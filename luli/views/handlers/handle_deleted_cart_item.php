<?php
    session_start();
    $id = $_REQUEST['id'];
    $key = $_REQUEST['delete'];
    switch ($key) {
        
        case "all":{
            if (isset($_SESSION["cart_shoes"])){
                session_unset();
                unset($_SESSION["cart_shoes"]);
                header("location: /luli/views/gio-hang.php");
            }else{
                header("location: /luli/views/gio-hang.php");
            }
            break;}

        case "item":{
            if (isset($_SESSION["cart_shoes"])) {
                if (isset($id)) {
                    unset($_SESSION["cart_shoes"][$id]);
                    if($_SESSION["cart_shoes"] == null){
                        session_unset();
                        header("location: /luli/views/gio-hang.php");
                    }else{
                        header("location: /luli/views/gio-hang.php");
                    }
                } else {
                    header("location: /luli/views/gio-hang.php");
                }
            } else {
                header("location: /luli/views/gio-hang.php");
            }
            break;}
    }
?>