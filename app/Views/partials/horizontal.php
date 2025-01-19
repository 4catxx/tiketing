<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="/" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="/" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="18">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm me-2 font-size-24 d-lg-none header-item waves-effect waves-light"
                data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                <i class="mdi mdi-menu"></i>
            </button>

        </div>

        <div class="d-flex">

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="<?= lang('Files.Search') ?>">
                    <span class="fa fa-search"></span>
                </div>
            </form>

            <div class="dropdown d-none d-md-block ms-2">
                <button type="button" class="btn header-item waves-effect"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                        $session = \Config\Services::session();
                        $lang = $session->get('lang');
                        switch($lang){
                            case 'en':
                                echo '<img class="me-2" src="assets/images/flags/us_flag.jpg" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>';
                            break;
                            case 'fr':
                                echo '<img class="me-2" src="assets/images/flags/french_flag.jpg" alt="Header Language" height="16"> French <span class="mdi mdi-chevron-down"></span>';
                            break;
                            case 'es':
                                echo '<img class="me-2" src="assets/images/flags/spain_flag.jpg" alt="Header Language" height="16"> Spanish <span class="mdi mdi-chevron-down"></span>';
                            break;
                            case 'de':
                                echo '<img class="me-2" src="assets/images/flags/germany_flag.jpg" alt="Header Language" height="16"> German <span class="mdi mdi-chevron-down"></span>';
                            break;
                            case 'it':
                                echo '<img class="me-2" src="assets/images/flags/italy_flag.jpg" alt="Header Language" height="16"> Italian <span class="mdi mdi-chevron-down"></span>';
                            break;
                            case 'ru':
                                echo '<img class="me-2" src="assets/images/flags/russia_flag.jpg" alt="Header Language" height="16"> Russian <span class="mdi mdi-chevron-down"></span>';
                            break;
                            default:
                                echo '<img class="me-2" src="assets/images/flags/us_flag.jpg" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>';
                        }
                    ?>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    
                    <!-- item-->
                    <a href="<?= base_url('lang/en'); ?>" class="dropdown-item notify-item">
                        <img src="assets/images/flags/us_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> English </span>
                    </a>

                    <!-- item-->
                    <a href="<?= base_url('lang/de'); ?>" class="dropdown-item notify-item">
                        <img src="assets/images/flags/germany_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                    </a>

                    <!-- item-->
                    <a href="<?= base_url('lang/it'); ?>" class="dropdown-item notify-item">
                        <img src="assets/images/flags/italy_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                    </a>

                    <!-- item-->
                    <a href="<?= base_url('lang/fr'); ?>" class="dropdown-item notify-item">
                        <img src="assets/images/flags/french_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                    </a>

                    <!-- item-->
                    <a href="<?= base_url('lang/es'); ?>" class="dropdown-item notify-item">
                        <img src="assets/images/flags/spain_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                    </a>

                     <!-- item-->
                     <a href="<?= base_url('lang/ru'); ?>" class="dropdown-item notify-item">
                        <img src="assets/images/flags/russia_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Russian </span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="badge bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-16"> <?= lang('Files.Notifications_258') ?> </h5>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="mdi mdi-cart-outline"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1"><?= lang('Files.Your_order_is_placed') ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?= lang('Files.Dummy_text_of_the_printing_and_typesetting_industry') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        
                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                        <i class="mdi mdi-message-text-outline"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1"><?= lang('Files.New_Message_received') ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?= lang('Files.You_have_87_unread_messages') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                        <i class="mdi mdi-glass-cocktail"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1"><?= lang('Files.Your_item_is_shipped') ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?= lang('Files.It_is_a_long_established_fact_that_a_reader_will') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="mdi mdi-cart-outline"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1"><?= lang('Files.Your_order_is_placed') ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?= lang('Files.Dummy_text_of_the_printing_and_typesetting_industry') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-danger rounded-circle font-size-16">
                                        <i class="mdi mdi-message-text-outline"></i>
                                    </span>
                                </div>
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1"><?= lang('Files.New_Message_received') ?></h6>
                                    <div class="font-size-12 text-muted">
                                        <p class="mb-1"><?= lang('Files.You_have_87_unread_messages') ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top">
                        <div class="d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                <?= lang('Files.View_all') ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/user-4.jpg"
                        alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> <?= lang('Files.Profile') ?></a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle me-1"></i> <?= lang('Files.My_Wallet') ?></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 align-middle me-1"></i> <?= lang('Files.Settings') ?><span class="badge bg-success ms-auto">11</span></a>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 align-middle me-1"></i> <?= lang('Files.Lock_screen') ?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i> <?= lang('Files.Logout') ?></a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                    <i class="mdi mdi-cog-outline"></i>
                </button>
            </div>

        </div>
    </div>
</header>

<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="ti-home me-2"></i><?= lang('Files.Dashboard') ?>
                        </a>
                    </li>

                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-auth" role="button">
                            <i class="ti-archive me-2"></i> <?= lang('Files.Authentication') ?>
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-lg" aria-labelledby="topnav-auth">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <a href="pages-login" class="dropdown-item"><?= lang('Files.Login_1') ?></a>
                                        <a href="pages-register" class="dropdown-item"><?= lang('Files.Register_1') ?></a>
                                        <a href="pages-recoverpw" class="dropdown-item"><?= lang('Files.Recover_Password_1') ?></a>
                                        <a href="pages-lock-screen" class="dropdown-item"><?= lang('Files.Lock_Screen_1') ?></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <a href="pages-login-2" class="dropdown-item"><?= lang('Files.Login_2') ?></a>
                                        <a href="pages-register-2" class="dropdown-item"><?= lang('Files.Register_2') ?></a>
                                        <a href="pages-recoverpw-2" class="dropdown-item"><?= lang('Files.Recover_Password_2') ?></a>
                                        <a href="pages-lock-screen-2" class="dropdown-item"><?= lang('Files.Lock_Screen_2') ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-extrapages" role="button">
                            <i class="ti-support me-2"></i> <?= lang('Files.Extra_Pages') ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-emailtemplates">
                            <a href="pages-starter" class="dropdown-item"><?= lang('Files.Starter_Page') ?></a>
                            <a href="pages-maintenance" class="dropdown-item"><?= lang('Files.Maintenance') ?></a>
                            <a href="pages-comingsoon" class="dropdown-item"><?= lang('Files.Coming_Soon') ?></a>
                            <a href="pages-404" class="dropdown-item"><?= lang('Files.Error_404') ?></a>
                            <a href="pages-500" class="dropdown-item"><?= lang('Files.Error_500') ?></a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button">
                            <i class="ti-layout me-2"></i> <?= lang('Files.Layouts') ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layout">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-verti"
                                    role="button">
                                    <?= lang('Files.Vertical') ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-verti">
                                    <a href="layouts-light-sidebar" class="dropdown-item"><?= lang('Files.Light_Sidebar') ?></a>
                                    <a href="layouts-compact-sidebar" class="dropdown-item"><?= lang('Files.Compact_Sidebar') ?></a>
                                    <a href="layouts-icon-sidebar" class="dropdown-item"><?= lang('Files.Icon_Sidebar') ?></a>
                                    <a href="layouts-boxed" class="dropdown-item"><?= lang('Files.Boxed_Layout') ?></a>
                                    <a href="layouts-colored-sidebar" class="dropdown-item"><?= lang('Files.Colored_Sidebar') ?></a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori"
                                    role="button">
                                    <?= lang('Files.Horizontal') ?> <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                    <a href="layouts-horizontal" class="dropdown-item"><?= lang('Files.Horizontal') ?></a>
                                    <a href="layouts-hori-topbar-light" class="dropdown-item"><?= lang('Files.Light_Topbar') ?></a>
                                    <a href="layouts-hori-boxed" class="dropdown-item"><?= lang('Files.Boxed_Layout') ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </div>
</div>