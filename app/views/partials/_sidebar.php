<!-- Sidebar -->
<nav class="navbar-vertical navbar">
    <div class="nav-scrolle">
        <!-- Brand logo -->
        <a class="navbar-brand text-center" href="<?= base_url(); ?>">
            <img src="<?= base_url(); ?>assets/images/brand/logo/wamanra.jfif" style="height: unset " alt="" width="80"/>
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <?php if ($this->session->has_userdata(SESSION_KEY) && current_user()->level_id == 1) : ?>
            <li class="nav-item">
                <a class="nav-link <?= strpos(current_url(), 'dashboard') ? 'active' : '' ?>" href="<?= base_url('dashboard'); ?>">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i>  Dashboard
                </a>
            </li>
            <?php endif; ?>
            <?php if (!$this->session->has_userdata(SESSION_KEY) || current_user()->level_id == TOURIST) : ?>
            <li class="nav-item">
                <a class="nav-link <?= $this->router->class == 'home' ? 'active' : '' ?>" href="<?= base_url(); ?>">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i>  Home
                </a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link <?= $this->router->class == 'destination' ? 'active' : '' ?>" href="<?= base_url('destination'); ?>">
                    <i data-feather="map" class="nav-icon icon-xs me-2"></i> Destinasi
                </a>
            </li>
            <?php if ($this->session->has_userdata(SESSION_KEY) && current_user()->level_id == ADMIN) : ?>
            <li class="nav-item">
                <a class="nav-link <?= $this->router->class == 'user' ? 'active' : '' ?>" href="<?= base_url('user'); ?>">
                    <i data-feather="users" class="nav-icon icon-xs me-2"></i> User 
                </a>
            </li>
            <?php endif; ?>
            <?php if (!current_user() || current_user()->level_id != GUIDE) : ?>
            <li class="nav-item">
                <a class="nav-link <?= $this->router->class == 'transaction' ? 'active' : '' ?>" href="<?= base_url('transaction'); ?>">
                    <i data-feather="shopping-bag" class="nav-icon icon-xs me-2"></i> Transaksi
                </a>
            </li>
            <?php endif;?>
            <?php if ($this->session->has_userdata(SESSION_KEY) && current_user()->level_id == GUIDE) : ?>
            <li class="nav-item">
                <a href="<?= base_url('order'); ?>" class="nav-link <?= $this->router->class == 'order' ? 'active' : '' ?>">
                    <i data-feather="file-text" class="nav-icon icon-xs me-2"></i> Pesanan
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>