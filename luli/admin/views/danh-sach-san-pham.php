<?php 
    include '../../db_connect.php';
    session_start(); 
    if(isset($_SESSION["adminid"]) == false){header("Location: /luli/admin/");}else{     
    include './shared/header.php'; 
?>
<div>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <?php include  './layouts/v_ds_san_pham.php'; ?>
        </div>
    </div>
</section>
</div>
<?php include './shared/footer.php'; }?>