<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex align-items-center justify-content-end flex-grow-1">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?= base_url('assets/images/users/user-4.jpg') ?>" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-2">test</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="<?= base_url('#') ?>">
                        <i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> 
                        <?= lang('Files.Profile') ?>
                    </a>
                    <a class="dropdown-item text-danger" href="<?= base_url('logout') ?>">
                        <i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> 
                        <?= lang('Files.Logout') ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>