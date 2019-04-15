<?php
 require_once APPROOT.'/views/inc/header.php';
 require_once APPROOT.'/views/inc/navbar.php';
?>
<div class="row">
    <div class="col-md-6">
        <h1>posts</h1>
    </div>
    <div class="col-md-6">
         <a href="<?php URLROOT;?>/posts/add" class="btn btn-primary pull-right">
         <i class="fa fa-pencil"></i>Add Post
        </a>
    </div>
</div>
<?php require_once APPROOT.'/views/inc/footer.php'; ?>