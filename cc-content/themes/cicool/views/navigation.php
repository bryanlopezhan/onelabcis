<style>
#mainNav {
    background-color: #fff0 !important;
    margin-bottom: 40px;
}
</style>
<nav id="mainNav" class="navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <!-- <a class="navbar-brand page-scroll" href="#page-top"><?= site_name(); ?></a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
            	<?php foreach (get_menu('top-menu') as $menu): ?>
                    <?php if (app()->aauth->is_allowed('menu_'.$menu->label)): ?>
                        <li>
                            <a class="page-scroll" href="<?= site_url($menu->link); ?>"><?= $menu->label; ?></a>
                        </li>
                    <?php endif ?>
            	<?php endforeach; ?>
                <?php if (!app()->aauth->is_loggedin()): ?>
                <li>
                    <a class="page-scroll" href="<?= site_url('administrator/login'); ?>"><i class="fa fa-sign-in"></i> <?= cclang('login'); ?></a>
                </li>
                <?php else: ?>
                <li>
                    <a class="page-scroll dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                        <img src="<?= BASE_URL.'uploads/user/'.(!empty(get_user_data('avatar')) ? get_user_data('avatar') :'default.png'); ?>" class="img-circle img-user" alt="User Image"> 
                        <?= get_user_data('full_name'); ?>
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= site_url('administrator/user/profile'); ?>">My Profile</a>
                        <a class="dropdown-item" href="<?= site_url('administrator/dashboard'); ?>">Dashboard</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= site_url('administrator/auth/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a>
                    </div>
                </li>
                <!-- <?php endif; ?>
                 
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>