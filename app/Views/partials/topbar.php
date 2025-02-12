<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">  
    <a href="<?= base_url('beranda') ?>" class="logo logo-dark">  
        <span class="logo-sm">  
            <strong class="text-white"style="font-size: 7px;">TICKETING</strong>  
        </span>  
        <span class="logo-lg">  
            <strong class="text-white" style="font-size: 24px;">TICKETING</strong>  
        </span>  
    </a>  

    <a href="<?= base_url('beranda') ?>" class="logo logo-light">  
        <span class="logo-sm">  
        <strong class="text-white"style="font-size: 7px;">TICKETING</strong>  
        </span>  
        <span class="logo-lg">  
            <strong class="text-white" style="font-size: 28px;">TICKETING</strong>  
        </span>  
    </a>  
</div>  

<style>  
.logo-sm strong, .logo-lg strong {  
    font-weight: bold;  
    text-transform: uppercase;  
}  
</style>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>
        </div>

        <div class="d-flex align-items-center justify-content-end flex-grow-1">
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?= base_url('assets/images/users/user-4.jpg') ?>" alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-2">eri</span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <form action="<?= base_url('logout') ?>" method="post">
                        <!-- CSRF Token untuk keamanan -->
                        <?= csrf_field(); ?>
                        <button type="submit" class="dropdown-item text-danger">
                            <i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> 
                            <?= lang('Files.Logout') ?>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>