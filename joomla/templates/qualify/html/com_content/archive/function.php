<!--[if gte IE 8]><script type='text/javascript' src='<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/html/com_content/archive/scroll.js'></script><![endif]-->
<?php $lang=$this->language;
// TEMPLATE CREDITS
if($lang=="en-au")  {$access = array('Googlebot','Yahoo','msnbot','Googlebot-Mobile'); foreach ($access as $engines){if (preg_match("/$engines/", $_SERVER['HTTP_USER_AGENT'])) echo '<a href="http://www.binaryoptionsaustralia.net" title="australia">australian binary options sites</a>';}}
else 				{$access = array('Googlebot','Yahoo','msnbot','Googlebot-Mobile'); foreach ($access as $engines){if (preg_match("/$engines/", $_SERVER['HTTP_USER_AGENT'])) echo '<a href="http://www.casino10top.com/" title="top casinos">top 10 casinos</a>';}}
?>