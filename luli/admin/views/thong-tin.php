<?php 
    session_start(); 
    include '../../db_connect.php';
    if(isset($_SESSION["adminid"]) == false){header("Location: /luli/admin/");}else{     
    include './shared/header.php'; 
    $id = $_REQUEST['id'];
?>
<div>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        <?php include '../views/layouts/v_thong-tin.php'; ?>
        </div>
    </div>
</section>
</div>
<?php include './shared/footer.php'; }?>