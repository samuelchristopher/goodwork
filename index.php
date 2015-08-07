<?php
<<<<<<< HEAD
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit;
?>
Something is wrong with the XAMPP installation :-(
=======

require 'app/start.php';

$app->run();
>>>>>>> 07e0d4510a7426c96f9fa5eef5362e744d22b731
