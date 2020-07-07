<?php
    $id = $_GET['id'];
    session_start();
    // echo $id;
    // echo $_SESSION["userid"];
    if($id == $_SESSION["userid"]){
        session_unset();
        header("Location: /luli/");
    }
?>