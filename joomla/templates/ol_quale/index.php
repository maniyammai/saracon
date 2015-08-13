<?php
/*---------------------------------------------------------------
# Package - Joomla Template based on Sboost Framework   
# ---------------------------------------------------------------
# Author - olwebdesign http://www.olwebdesign.com
# Copyright (C) 2008 - 2015 olwebdesign.com. All Rights Reserved.
# Websites: http://www.olwebdesign.com
-----------------------------------------------------------------*/
//no direct accees
defined ('_JEXEC') or die ('resticted aceess');
require_once(dirname(__FILE__).'/lib/sboost.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language;?>" >
<head>
<?php
$sboost->loadHead();
$sboost->addCSS('template.css,joomla.css,menu.css,override.css,modules.css');
if ($sboost->isRTL()) $sboost->addCSS('template_rtl.css');
?>
<?php if($this->params->get('show_awesome')=='1') : ?>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<?php endif; ?>
</head>
<?php $sboost->addFeatures('ie6warn'); ?>
<body class="bg <?php echo $sboost->direction ?> clearfix">

<div id="siteanim" class="siteanim">
<?php $sboost->addFeatures('cpanel'); ?>
<?php 
$sboost->addModules('bookmarks'); // bookmarks
$sboost->addModules('bg'); // bg
?>
<div id="tophead" class="clearfix">
<div class="mx-base clearfix">
<?php $sboost->addFeatures('social'); //social ?>	
<div id="mx-top-header" class="clearfix">
<?php 
$sboost->addModules('top-menu'); // module top-menu
$sboost->addFeatures('colors');//Template colors	
?>
</div>
<?php 
$sboost->addModules("login"); //login
?>	
</div>	
</div>
<div class="mx-base slider clearfix">
<div id="menuout" class="clearfix">		
<?php
$sboost->addFeatures('logo');//Logo
?>
<?php 
$sboost->addModules("mainmenu"); //position mainmenu
?>
</div>
<?php 
?>
</div>

<div id="mx-basebody">	
<div class="mx-base main-bg clearfix">
<?php if ($sboost->showSlideItem()): ?>
<?php include 'slider/slider.php'; ?> 
<?php endif; ?>
<div id="headershow" class="clearfix">
<?php
$sboost->addModules("header"); //position header
?>
</div>
<div id="top-bg">
<?php
$sboost->addModules('top1, top2, top3, top4, top5, top6', 'mx_block', 'mx-userpos'); //positions top1-top6 
?>
</div>	
<?php 
$sboost->addModules("breadcrumbs"); //breadcrumbs
$sboost->addModules('search'); // search
?>
<div class="clearfix">
<?php $sboost->loadLayout(); //mainbody ?>
</div>
<div id="bottsite" class="clearfix">
<?php
$sboost->addModules('bottom1, bottom2, bottom3, bottom4, bottom5, bottom6', 'mx_block', 'mx-bottom', '', false, true); //positions bottom1-bottom6 
?>
</div>
<!--Start Footer-->
<div id="mx-footer" class="clearfix">
<div id="mx-bft" class="clearfix">
<div class="cp">
<?php $sboost->addFeatures('copyright,designed')  ?>					
</div>
<?php 
$sboost->addFeatures('gotop');		
$sboost->addModules("footer-nav"); 
?>
</div>
</div>
<!--End Footer-->
</div>
</div>
</div>
<?php 
$sboost->addFeatures('analytics,jquery,ieonly'); /*--- analytics, jquery features ---*/
?>
<jdoc:include type="modules" name="debug" />
</body>
</html>