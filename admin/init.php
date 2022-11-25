<?php

	// Error Reporting

	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	include 'connect.php';

	$sessionUser = '';
	
	if (isset($_SESSION['user'])) {
		$sessionUser = $_SESSION['user'];
	}

	// Routes

	$tpl 	= 'includes/templates/'; // Template Directory
	$lang 	= 'includes/languages/'; // Language Directory
	$func	= 'includes/functions/'; // Functions Directory
	$css 	= 'assets/css/'; // Css Directory
	$js 	= 'assets/js/'; // Js Directory

	// Include The Important Files

	include $func . 'functions.php';
	include $lang . 'english.php';
	include $tpl . 'header.php';
	include $tpl . 'navber.php';
	include $tpl . 'aside.php';

	

	