<?php include '../db_connect.php';
include './shared/header.php'; 
$id = $_REQUEST['id'];
?>

<div id="page">
    <div class="main-content">
        <div class="container">
            <?php include "../views/layouts/v_chi_tiet_san_pham.php"; ?>
        </div>
    </div>
</div>

<?php
// include './views/share/footer.php'; 
include './shared/footer.php';
?>