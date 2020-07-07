<?php 
    session_start(); 
    if(isset($_SESSION["adminid"]) == false){header("Location: /luli/admin/");}else{     
    include './shared/header.php'; 
?>
<div  style="background: black; position: absolute; width: 100%; height: 100%;">
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <?php include  './layouts/v_base_admin.php'; ?>
        </div>
    </div>
</section>
</div>
<?php include './shared/footer.php'; }?>