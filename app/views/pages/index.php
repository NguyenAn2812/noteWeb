<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-3"><?php echo $data['title']; ?></h1>
            <p class="lead"><?php echo $data['description']; ?></p>
            <?php if(!isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/auth/register" class="btn btn-primary btn-lg">Đăng ký</a>
                <a href="<?php echo URLROOT; ?>/auth/login" class="btn btn-success btn-lg">Đăng nhập</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/notes" class="btn btn-primary btn-lg">Ghi chú của tôi</a>
            <?php endif; ?>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?> 