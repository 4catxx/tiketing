/*
Template Name: Veltrix - Admin & Dashboard Template
Author: Themesdesign
Website: https://Themesdesign.in//
Contact: Themesdesign@gmail.in
File: Session Timeout Js File
*/

$.sessionTimeout({
	keepAliveUrl: 'pages-starter.html',
	logoutButton:'Logout',
	logoutUrl: 'pages-login.html',
	redirUrl: 'pages-lock-screen.html',
	warnAfter: 3000,
	redirAfter: 30000,
	countdownMessage: 'Redirecting in {timer} seconds.'
});