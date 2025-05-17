<?php
$current_page = basename($_SERVER['REQUEST_URI']);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == '' ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $current_page == 'about' ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>/pages/about">Giới thiệu</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/notes">Ghi chú của tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo URLROOT; ?>/auth/logout">Đăng xuất</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'auth/login' ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>/auth/login">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $current_page == 'auth/register' ? 'active' : ''; ?>" href="<?php echo URLROOT; ?>/auth/register">Đăng ký</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav> 