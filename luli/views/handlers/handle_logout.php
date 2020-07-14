<?php
    session_start();
    // echo $id;
    // echo $_SESSION["userid"];
    if($_SESSION["userid"] != null){
        session_unset();
        header("Location: /luli/");
    }
?>