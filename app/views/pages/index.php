<?php
 require_once APPROOT.'/views/inc/header.php';
 require_once APPROOT.'/views/inc/navbar.php';
?>
   <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
   
    <h1><?php echo $data['title'];?></h1>
    <?php var_dump($_SESSION['user_id']);?>
    
    

    </div>

   </div>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>