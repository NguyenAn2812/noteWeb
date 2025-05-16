<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-3"><?php echo $data['title']; ?></h1>
            <p class="lead"><?php echo $data['description']; ?></p>
            <?php if(!isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-primary btn-lg">Register</a>
                <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-success btn-lg">Login</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/notes" class="btn btn-primary btn-lg">My Notes</a>
            <?php endif; ?>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?> 