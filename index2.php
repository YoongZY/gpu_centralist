<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$url = 'https://';
	} else {
		$url = 'http://';
	}
	$url .= $_SERVER['HTTP_HOST'];
	header('Location: '.$url.'/dashboard/');
	exit;
?>
