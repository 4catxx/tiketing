<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Language
$routes->get('/lang/{locale}', 'Language::index');

$routes->get('/', 'AuthController::index');
$routes->post('process-login', 'AuthController::processLogin');
$routes->get('register', 'AuthController::showRegister');
$routes->post('process-register', 'AuthController::processRegister');
$routes->post('logout', 'AuthController::logout');

// User
$routes->get('form-pekerjaan', 'UserController::showFormPekerjaan');
$routes->post('submit-form-pekerjaan', 'UserController::submitFormPekerjaan');
$routes->get('vendor-internal', 'UserController::showVendorInternal');
$routes->post('submit-vendor-internal', 'UserController::submitVendorInternal');
$routes->get('vendor-eksternal', 'UserController::showVendorEksternal');
$routes->post('submit-vendor-eksternal', 'UserController::submitVendorEksternal');

// Admin
$routes->get('beranda', 'AdminController::showBeranda');
$routes->get('ticket-pekerjaan', 'AdminController::showTiketPekerjaan');
$routes->post('selesaikan-tiket/(:num)', 'AdminController::selesaikanTiket/$1');

// Vertical Layout Pages Routes
$routes->get('layouts-light-sidebar', 'Home::show_layouts_light_sidebar');
$routes->get('layouts-compact-sidebar', 'Home::show_layouts_compact_sidebar');
$routes->get('layouts-icon-sidebar', 'Home::show_layouts_icon_sidebar');
$routes->get('layouts-boxed', 'Home::show_layouts_boxed');
$routes->get('layouts-colored-sidebar', 'Home::show_layouts_colored_sidebar');

// Horizontal Layout Pages Routes
$routes->get('layouts-horizontal', 'Home::show_layouts_horizontal');
$routes->get('layouts-hori-topbar-light', 'Home::show_layouts_hori_topbar_light');
$routes->get('layouts-hori-boxed', 'Home::show_layouts_hori_boxed');

// Vertical and Horizontal Layout RTL and DARK Layout
$routes->get('vertical-rtl', 'Home::show_vertical_rtl');
$routes->get('vertical-dark', 'Home::show_vertical_dark');
$routes->get('horizontal-rtl', 'Home::show_horizontal_rtl');
$routes->get('horizontal-dark', 'Home::show_horizontal_dark');

// Calender
$routes->get('calendar', 'Home::show_calendar');

// Email
$routes->get('email-inbox', 'Home::show_email_inbox');
$routes->get('email-read', 'Home::show_email_read');
$routes->get('email-compose', 'Home::show_email_compose');

// UI Elements
$routes->get('ui-alerts', 'Home::show_ui_alerts');
$routes->get('ui-buttons', 'Home::show_ui_buttons');
$routes->get('ui-cards', 'Home::show_ui_cards');
$routes->get('ui-carousel', 'Home::show_ui_carousel');
$routes->get('ui-dropdowns', 'Home::show_ui_dropdowns');
$routes->get('ui-grid', 'Home::show_ui_grid');
$routes->get('ui-images', 'Home::show_ui_images');
$routes->get('ui-lightbox', 'Home::show_ui_lightbox');
$routes->get('ui-modals', 'Home::show_ui_modals');
$routes->get('ui-rangeslider', 'Home::show_ui_rangeslider');
$routes->get('ui-session-timeout', 'Home::show_ui_session_timeout');
$routes->get('ui-progressbars', 'Home::show_ui_progressbars');
$routes->get('ui-sweet-alert', 'Home::show_ui_sweet_alert');
$routes->get('ui-tabs-accordions', 'Home::show_ui_tabs_accordions');
$routes->get('ui-typography', 'Home::show_ui_typography');
$routes->get('ui-video', 'Home::show_ui_video');
$routes->get('ui-general', 'Home::show_ui_general');
$routes->get('ui-colors', 'Home::show_ui_colors');
$routes->get('ui-rating', 'Home::show_ui_rating');
$routes->get('ui-utilities', 'Home::show_ui_utilities');

// Forms
$routes->get('form-elements', 'Home::show_form_elements');
$routes->get('form-validation', 'Home::show_form_validation');
$routes->get('form-advanced', 'Home::show_form_advanced');
$routes->get('form-editors', 'Home::show_form_editors');
$routes->get('form-uploads', 'Home::show_form_uploads');
$routes->get('form-xeditable', 'Home::show_form_xeditable');
$routes->get('form-repeater', 'Home::show_form_repeater');
$routes->get('form-wizard', 'Home::show_form_wizard');
$routes->get('form-mask', 'Home::show_form_mask');

// Charts
$routes->get('charts-morris', 'Home::show_charts_morris');
$routes->get('charts-chartist', 'Home::show_charts_chartist');
$routes->get('charts-chartjs', 'Home::show_charts_chartjs');
$routes->get('charts-flot', 'Home::show_charts_flot');
$routes->get('charts-knob', 'Home::show_charts_knob');
$routes->get('charts-sparkline', 'Home::show_charts_sparkline');

// Tables
$routes->get('tables-basic', 'Home::show_tables_basic');
$routes->get('tables-datatable', 'Home::show_tables_datatable');
$routes->get('tables-responsive', 'Home::show_tables_responsive');
$routes->get('tables-editable', 'Home::show_tables_editable');

// Icons
$routes->get('icons-material', 'Home::show_icons_material');
$routes->get('icons-fontawesome', 'Home::show_icons_fontawesome');
$routes->get('icons-ion', 'Home::show_icons_ion');
$routes->get('icons-themify', 'Home::show_icons_themify');
$routes->get('icons-dripicons', 'Home::show_icons_dripicons');
$routes->get('icons-typicons', 'Home::show_icons_typicons');

// Maps
$routes->get('maps-google', 'Home::show_maps_google');
$routes->get('maps-vector', 'Home::show_maps_vector');

// Authentication
$routes->get('pages-login', 'Home::show_pages_login');
$routes->get('pages-login-2', 'Home::show_pages_login_2');
$routes->get('pages-register', 'Home::show_pages_register');
$routes->get('pages-register-2', 'Home::show_pages_register_2');
$routes->get('pages-recoverpw', 'Home::show_pages_recoverpw');
$routes->get('pages-recoverpw-2', 'Home::show_pages_recoverpw_2');
$routes->get('pages-lock-screen', 'Home::show_pages_lock_screen');
$routes->get('pages-lock-screen-2', 'Home::show_pages_lock_screen_2');

// Extra Pages
$routes->get('pages-timeline', 'Home::show_pages_timeline');
$routes->get('pages-invoice', 'Home::show_pages_invoice');
$routes->get('pages-directory', 'Home::show_pages_directory');
$routes->get('pages-starter', 'Home::show_pages_starter');
$routes->get('pages-404', 'Home::show_pages_404');
$routes->get('pages-500', 'Home::show_pages_500');
$routes->get('pages-pricing', 'Home::show_pages_pricing');
$routes->get('pages-gallery', 'Home::show_pages_gallery');
$routes->get('pages-profile', 'Home::show_pages_profile');
$routes->get('pages-maintenance', 'Home::show_pages_maintenance');
$routes->get('pages-comingsoon', 'Home::show_pages_comingsoon');
$routes->get('pages-faq', 'Home::show_pages_faq');

// Email Templates
$routes->get('email-template-basic', 'Home::show_email_template_basic');
$routes->get('email-template-alert', 'Home::show_email_template_alert');
$routes->get('email-template-billing', 'Home::show_email_template_billing');


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
