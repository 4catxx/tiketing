<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'subtitle' => 'Welcome to Veltrix Dashboard'])
		];
		return view('index', $data);
	}

	// Vertical Layout Pages Routes
	public function show_layouts_light_sidebar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Light_Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Light Sidebar', 'subtitle' => 'Vertical'])
		];
		return view('layouts-light-sidebar', $data);
	}

	public function show_layouts_compact_sidebar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Compact_Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Compact Sidebar', 'subtitle' => 'Vertical'])
		];
		return view('layouts-compact-sidebar', $data);
	}

	public function show_layouts_icon_sidebar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Icon_Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Icon Sidebar', 'subtitle' => 'Vertical'])
		];
		return view('layouts-icon-sidebar', $data);
	}

	public function show_layouts_boxed()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Boxed_Layout']),
			'page_title' => view('partials/page-title', ['title' => 'Boxed Layout', 'subtitle' => 'Vertical'])
		];
		return view('layouts-boxed', $data);
	}
	public function show_layouts_colored_sidebar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Colored_Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Colored Sidebar', 'subtitle' => 'Layouts'])
		];
		return view('layouts-colored-sidebar', $data);
	}

	// Horizontal Layout Pages Routes
	public function show_layouts_horizontal()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Horizontal']),
			'page_title' => view('partials/page-title', ['title' => 'Horizontal', 'subtitle' => 'Layouts'])
		];
		return view('layouts-horizontal', $data);
	}

	public function show_layouts_hori_topbar_light()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Light_Topbar']),
			'page_title' => view('partials/page-title', ['title' => 'Light Topbar', 'subtitle' => 'Horizontal'])
		];
		return view('layouts-hori-topbar-light', $data);
	}

	public function show_layouts_hori_boxed()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Boxed_Layout']),
			'page_title' => view('partials/page-title', ['title' => 'Boxed Layout', 'subtitle' => 'Horizontal'])
		];
		return view('layouts-hori-boxed', $data);
	}

	// Vertical and Horizontal Layout RTL and DARK Layout
	public function show_vertical_rtl()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'subtitle' => 'Welcome to Veltrix Dashboard'])
		];
		return view('vertical-rtl', $data);
	}

	public function show_vertical_dark()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'subtitle' => 'Welcome to Veltrix Dashboard'])
		];
		return view('vertical-dark', $data);
	}

	public function show_horizontal_rtl()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'subtitle' => 'Welcome to Veltrix Dashboard'])
		];
		return view('horizontal-rtl', $data);
	}

	public function show_horizontal_dark()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dashboard']),
			'page_title' => view('partials/page-title', ['title' => 'Dashboard', 'subtitle' => 'Welcome to Veltrix Dashboard'])
		];
		return view('horizontal-dark', $data);
	}

	// Calender
	public function show_calendar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Calendar']),
			'page_title' => view('partials/page-title', ['title' => 'Calendar'])
		];
		return view('calendar', $data);
	}

	// Email
	public function show_email_inbox()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Inbox']),
			'page_title' => view('partials/page-title', ['title' => 'Inbox', 'subtitle' => 'Email'])
		];
		return view('email-inbox', $data);
	}

	public function show_email_read()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Email_Read']),
			'page_title' => view('partials/page-title', ['title' => 'Email Read', 'subtitle' => 'Email'])
		];
		return view('email-read', $data);
	}

	public function show_email_compose()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Email_Compose']),
			'page_title' => view('partials/page-title', ['title' => 'Email Compose', 'subtitle' => 'Email'])
		];
		return view('email-compose', $data);
	}

	// UI Elements
	public function show_ui_alerts()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Alerts']),
			'page_title' => view('partials/page-title', ['title' => 'Alerts', 'subtitle' => 'UI Elements'])
		];
		return view('ui-alerts', $data);
	}
	public function show_ui_buttons()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Buttons']),
			'page_title' => view('partials/page-title', ['title' => 'Buttons', 'subtitle' => 'UI Elements'])
		];
		return view('ui-buttons', $data);
	}
	public function show_ui_cards()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Cards']),
			'page_title' => view('partials/page-title', ['title' => 'Cards', 'subtitle' => 'UI Elements'])
		];
		return view('ui-cards', $data);
	}
	public function show_ui_carousel()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Carousel']),
			'page_title' => view('partials/page-title', ['title' => 'Carousel', 'subtitle' => 'UI Elements'])
		];
		return view('ui-carousel', $data);
	}
	public function show_ui_dropdowns()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dropdowns']),
			'page_title' => view('partials/page-title', ['title' => 'Dropdowns', 'subtitle' => 'UI Elements'])
		];
		return view('ui-dropdowns', $data);
	}
	public function show_ui_grid()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Grid']),
			'page_title' => view('partials/page-title', ['title' => 'Grid', 'subtitle' => 'UI Elements'])
		];
		return view('ui-grid', $data);
	}
	public function show_ui_images()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Images']),
			'page_title' => view('partials/page-title', ['title' => 'Images', 'subtitle' => 'UI Elements'])
		];
		return view('ui-images', $data);
	}
	public function show_ui_lightbox()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Lightbox']),
			'page_title' => view('partials/page-title', ['title' => 'Lightbox', 'subtitle' => 'UI Elements'])
		];
		return view('ui-lightbox', $data);
	}
	public function show_ui_modals()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Modals']),
			'page_title' => view('partials/page-title', ['title' => 'Modals', 'subtitle' => 'UI Elements'])
		];
		return view('ui-modals', $data);
	}
	public function show_ui_rangeslider()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Range_Slider']),
			'page_title' => view('partials/page-title', ['title' => 'Range Slider', 'subtitle' => 'UI Elements'])
		];
		return view('ui-rangeslider', $data);
	}
	public function show_ui_session_timeout()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Session_Timeout']),
			'page_title' => view('partials/page-title', ['title' => 'Session Timeout', 'subtitle' => 'UI Elements'])
		];
		return view('ui-session-timeout', $data);
	}
	public function show_ui_progressbars()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Progress_Bars']),
			'page_title' => view('partials/page-title', ['title' => 'Progress Bars', 'subtitle' => 'UI Elements'])
		];
		return view('ui-progressbars', $data);
	}
	public function show_ui_sweet_alert()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'SweetAlert_2']),
			'page_title' => view('partials/page-title', ['title' => 'SweetAlert 2', 'subtitle' => 'UI Elements'])
		];
		return view('ui-sweet-alert', $data);
	}
	public function show_ui_tabs_accordions()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Tabs_and_Accordions']),
			'page_title' => view('partials/page-title', ['title' => 'Tabs & Accordions', 'subtitle' => 'UI Elements'])
		];
		return view('ui-tabs-accordions', $data);
	}
	public function show_ui_typography()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Typography']),
			'page_title' => view('partials/page-title', ['title' => 'Typography', 'subtitle' => 'UI Elements'])
		];
		return view('ui-typography', $data);
	}
	public function show_ui_video()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Video']),
			'page_title' => view('partials/page-title', ['title' => 'Video', 'subtitle' => 'UI Elements'])
		];
		return view('ui-video', $data);
	}
	public function show_ui_utilities()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Utilities']),
			'page_title' => view('partials/page-title', ['title' => 'Utilities', 'subtitle' => 'UI Elements'])
		];
		return view('ui-utilities', $data);
	}
	public function show_ui_general()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'General']),
			'page_title' => view('partials/page-title', ['title' => 'General', 'subtitle' => 'UI Elements'])
		];
		return view('ui-general', $data);
	}
	public function show_ui_colors()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Colors']),
			'page_title' => view('partials/page-title', ['title' => 'Colors', 'subtitle' => 'UI Elements'])
		];
		return view('ui-colors', $data);
	}
	public function show_ui_rating()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Rating']),
			'page_title' => view('partials/page-title', ['title' => 'Rating', 'subtitle' => 'UI Elements'])
		];
		return view('ui-rating', $data);
	}

	// Forms
	public function show_form_elements()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Elements']),
			'page_title' => view('partials/page-title', ['title' => 'Form Elements', 'subtitle' => 'Forms'])
		];
		return view('form-elements', $data);
	}
	public function show_form_validation()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Validation']),
			'page_title' => view('partials/page-title', ['title' => 'Form Validation', 'subtitle' => 'Forms'])
		];
		return view('form-validation', $data);
	}
	public function show_form_advanced()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Advanced']),
			'page_title' => view('partials/page-title', ['title' => 'Form Advanced', 'subtitle' => 'Forms'])
		];
		return view('form-advanced', $data);
	}
	public function show_form_editors()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Editors']),
			'page_title' => view('partials/page-title', ['title' => 'Form Editors', 'subtitle' => 'Forms'])
		];
		return view('form-editors', $data);
	}
	public function show_form_uploads()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_File_Upload']),
			'page_title' => view('partials/page-title', ['title' => 'Form File Upload', 'subtitle' => 'Forms'])
		];
		return view('form-uploads', $data);
	}
	public function show_form_xeditable()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Xeditable']),
			'page_title' => view('partials/page-title', ['title' => 'Form Xeditable', 'subtitle' => 'Forms'])
		];
		return view('form-xeditable', $data);
	}
	public function show_form_repeater()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Repeater']),
			'page_title' => view('partials/page-title', ['title' => 'Form Repeater', 'subtitle' => 'Forms'])
		];
		return view('form-repeater', $data);
	}
	public function show_form_wizard()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Wizard']),
			'page_title' => view('partials/page-title', ['title' => 'Form Wizard', 'subtitle' => 'Forms'])
		];
		return view('form-wizard', $data);
	}
	public function show_form_mask()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Mask']),
			'page_title' => view('partials/page-title', ['title' => 'Form Mask', 'subtitle' => 'Forms'])
		];
		return view('form-mask', $data);
	}

	// Charts
	public function show_charts_morris()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Morris_Chart']),
			'page_title' => view('partials/page-title', ['title' => 'Morris Chart', 'subtitle' => 'Charts'])
		];
		return view('charts-morris', $data);
	}
	public function show_charts_chartist()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chartist_Chart']),
			'page_title' => view('partials/page-title', ['title' => 'Chartist Chart', 'subtitle' => 'Charts'])
		];
		return view('charts-chartist', $data);
	}
	public function show_charts_chartjs()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chartjs_Chart']),
			'page_title' => view('partials/page-title', ['title' => 'Chartjs Chart', 'subtitle' => 'Charts'])
		];
		return view('charts-chartjs', $data);
	}
	public function show_charts_flot()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Flot_Chart']),
			'page_title' => view('partials/page-title', ['title' => 'Flot Chart', 'subtitle' => 'Charts'])
		];
		return view('charts-flot', $data);
	}
	public function show_charts_knob()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Jquery_Knob_Chart']),
			'page_title' => view('partials/page-title', ['title' => 'Jquery Knob Chart', 'subtitle' => 'Charts'])
		];
		return view('charts-knob', $data);
	}
	public function show_charts_sparkline()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Sparkline_Chart']),
			'page_title' => view('partials/page-title', ['title' => 'Sparkline Chart', 'subtitle' => 'Charts'])
		];
		return view('charts-sparkline', $data);
	}

	// Tables
	public function show_tables_basic()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Basic_Tables']),
			'page_title' => view('partials/page-title', ['title' => 'Basic Tables', 'subtitle' => 'Tables'])
		];
		return view('tables-basic', $data);
	}
	public function show_tables_datatable()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Data_Table']),
			'page_title' => view('partials/page-title', ['title' => 'Data Table', 'subtitle' => 'Tables'])
		];
		return view('tables-datatable', $data);
	}
	public function show_tables_responsive()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Responsive_Table']),
			'page_title' => view('partials/page-title', ['title' => 'Responsive Table', 'subtitle' => 'Tables'])
		];
		return view('tables-responsive', $data);
	}
	public function show_tables_editable()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Editable_Table']),
			'page_title' => view('partials/page-title', ['title' => 'Editable Table', 'subtitle' => 'Tables'])
		];
		return view('tables-editable', $data);
	}

	// Icons
	public function show_icons_material()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Material_Design']),
			'page_title' => view('partials/page-title', ['title' => 'Material Design', 'subtitle' => 'Icons'])
		];
		return view('icons-material', $data);
	}

	public function show_icons_fontawesome()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Font_Awesome']),
			'page_title' => view('partials/page-title', ['title' => 'Font Awesome', 'subtitle' => 'Icons'])
		];
		return view('icons-fontawesome', $data);
	}

	public function show_icons_ion()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Ion_Icons']),
			'page_title' => view('partials/page-title', ['title' => 'Ion Icons', 'subtitle' => 'Icons'])
		];
		return view('icons-ion', $data);
	}

	public function show_icons_themify()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Themify_Icons']),
			'page_title' => view('partials/page-title', ['title' => 'Themify Icons', 'subtitle' => 'Icons'])
		];
		return view('icons-themify', $data);
	}

	public function show_icons_dripicons()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dripicons']),
			'page_title' => view('partials/page-title', ['title' => 'Dripicons', 'subtitle' => 'Icons'])
		];
		return view('icons-dripicons', $data);
	}

	public function show_icons_typicons()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Typicons_Icons']),
			'page_title' => view('partials/page-title', ['title' => 'Typicons Icons', 'subtitle' => 'Icons'])
		];
		return view('icons-typicons', $data);
	}

	// Maps
	public function show_maps_google()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Google_Map']),
			'page_title' => view('partials/page-title', ['title' => 'Google Map', 'subtitle' => 'Maps'])
		];
		return view('maps-google', $data);
	}
	public function show_maps_vector()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Vector_Map']),
			'page_title' => view('partials/page-title', ['title' => 'Vector Map', 'subtitle' => 'Maps'])
		];
		return view('maps-vector', $data);
	}

	// Authentication
	public function show_pages_login()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Login_1'])
		];
		return view('pages-login', $data);
	}

	public function show_pages_login_2()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Login_2'])
		];
		return view('pages-login-2', $data);
	}

	public function show_pages_register()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Register_1'])
		];
		return view('pages-register', $data);
	}

	public function show_pages_register_2()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Register_2'])
		];
		return view('pages-register-2', $data);
	}

	public function show_pages_recoverpw()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Recover_Password_1'])
		];
		return view('pages-recoverpw', $data);
	}

	public function show_pages_recoverpw_2()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Recover_Password_2'])
		];
		return view('pages-recoverpw-2', $data);
	}

	public function show_pages_lock_screen()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Lock_Screen_1'])
		];
		return view('pages-lock-screen', $data);
	}

	public function show_pages_lock_screen_2()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Lock_Screen_2'])
		];
		return view('pages-lock-screen-2', $data);
	}

	// Extra Pages
	public function show_pages_timeline()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Timeline']),
			'page_title' => view('partials/page-title', ['title' => 'Timeline', 'subtitle' => 'Extra Pages'])
		];
		return view('pages-timeline', $data);
	}

	public function show_pages_invoice()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice']),
			'page_title' => view('partials/page-title', ['title' => 'Invoice', 'subtitle' => 'Extra Pages'])
		];
		return view('pages-invoice', $data);
	}

	public function show_pages_directory()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Directory']),
			'page_title' => view('partials/page-title', ['title' => 'Directory', 'subtitle' => 'Extra Pages'])
		];
		return view('pages-directory', $data);
	}

	public function show_pages_starter()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Starter_Page']),
			'page_title' => view('partials/page-title', ['title' => 'Starter Page', 'subtitle' => 'Extra Pages'])
		];
		return view('pages-starter', $data);
	}

	public function show_pages_404()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Error_404'])
		];
		return view('pages-404', $data);
	}

	public function show_pages_500()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Error_500'])
		];
		return view('pages-500', $data);
	}

	public function show_pages_pricing()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Pricing']),
			'page_title' => view('partials/page-title', ['title' => 'Pricing', 'subtitle' => 'Extra Pages'])
		];
		return view('pages-pricing', $data);
	}

	public function show_pages_gallery()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Gallery']),
			'page_title' => view('partials/page-title', ['title' => 'Gallery', 'subtitle' => 'Extra Pages'])
		];
		return view('pages-gallery', $data);
	}
	public function show_pages_profile()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Profile']),
			'page_title' => view('partials/page-title', ['title' => 'Profile', 'subtitle' => 'Extra Pages'])
		];
		return view('pages-profile', $data);
	}
	public function show_pages_maintenance()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Maintenance'])
		];
		return view('pages-maintenance', $data);
	}
	public function show_pages_comingsoon()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Coming_Soon'])
		];
		return view('pages-comingsoon', $data);
	}

	public function show_pages_faq()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'FAQs']),
			'page_title' => view('partials/page-title', ['title' => 'FAQs', 'subtitle' => 'Extra Pages'])
		];
		return view('pages-faq', $data);
	}

	// Email Templates
	public function show_email_template_basic()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Basic_Action_Email']),
			'page_title' => view('partials/page-title', ['title' => 'Basic Action Email', 'subtitle' => 'Email Templates'])
		];
		return view('email-template-basic', $data);
	}

	public function show_email_template_alert()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Alert_Email']),
			'page_title' => view('partials/page-title', ['title' => 'Alert Email', 'subtitle' => 'Email Templates'])
		];
		return view('email-template-alert', $data);
	}
	public function show_email_template_billing()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Billing_Email']),
			'page_title' => view('partials/page-title', ['title' => 'Billing Email', 'subtitle' => 'Email Templates'])
		];
		return view('email-template-billing', $data);
	}
}
