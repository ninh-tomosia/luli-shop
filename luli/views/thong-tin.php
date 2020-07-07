<?php 
include '../db_connect.php';
include './shared/header.php'; 
$id = $_REQUEST['id'];
?>

<div id="page">
    <div class="main-content">
        <div class="container">
            <?php include '../views/layouts/v_thong-tin.php'; ?>
        </div>
    </div>
</div>

<?php
include './shared/footer.php';
?>