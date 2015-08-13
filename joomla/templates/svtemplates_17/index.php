<?php
defined('_JEXEC') or die;

/**
 * See readme.txt for more details on how to use the template.
 */

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");

// Initialize $view:
$view = $this->artx = new ArtxPage($this);

// Decorate component with Art style:
$view->componentWrapper();

JHtml::_('behavior.framework', true);

?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
    <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />

    <!-- Created by svtemplates.com V4.3-->
    
    
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 2.0, user-scalable = yes, width = device-width" />

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" type="text/css" />
    <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
     <!--[if lte IE 8]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie8.css" media="screen" /><![endif]-->
      <!--[if lte IE 9]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie9.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.responsive.css" media="all" type="text/css" />

<link rel="shortcut icon" href="<?php echo $templateUrl; ?>/favicon.ico" type="image/gif" />
  <link rel="shortcut icon" href="<?php echo $templateUrl; ?>/favicon.ico" type="image/x-icon" />
    <script>if ('undefined' != typeof jQuery) document._artxJQueryBackup = jQuery;</script>
    <script src="<?php echo $templateUrl; ?>/jquery.js"></script>
    <script>jQuery.noConflict();</script>

    <script src="<?php echo $templateUrl; ?>/script.js"></script>
    <script src="<?php echo $templateUrl; ?>/script.responsive.js"></script>
    <script src="<?php echo $templateUrl; ?>/modules.js"></script>
    <?php $view->includeInlineScripts() ?>
    <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
    
     <script type="text/javascript">
jQuery(window).scroll(function() {
var scroll = jQuery(window).scrollTop();
if (scroll >= 0) {
jQuery(".art-nav").addClass("tiny");

}
if (scroll <= 20) { jQuery (".art-nav").removeClass("tiny");

} });
</script> 

</head>
<body>
<?php if ($view->containsModules('top-1', 'top-2', 'top-3', 'top-4', 'top-5', 'top-6', 'top-7','top-8','top-9','top-10','top-11','top-12','top-13','top-14' ,'top-15')) : ?>
 <div class="art-layout-cell art-content1">
<?php
  echo $view->position('top-1', 'art-nostyle');
  if ($view->containsModules('top-2'))
    echo artxPost($view->position('top-2'));
  echo $view->positions(array('top-3' => 50, 'top-4' => 50), 'art-article');
  echo $view->positions(array('top-5' => 33, 'top-6' => 33, 'top-7' => 34), 'art-article');
  echo $view->position('top-8', 'art-nostyle');
  echo $view->position('top-9', 'art-article');
  echo $view->positions(array('top-10' => 50, 'top-11' => 50), 'art-article');
  echo $view->position('top-12', 'art-nostyle');
  echo $view->positions(array('top-13' => 33, 'top-14' => 33, 'top-15' => 34), 'art-article');
?>
</div>    
 <?php endif; ?> 


<div id="art-main">
<?php if ($view->containsModules('position-1', 'position-28', 'position-29')) : ?>
<nav class="art-nav">
    
<?php if ($view->containsModules('position-28')) : ?>
<div class="art-hmenu-extra1"><?php echo $view->position('position-28'); ?></div>
<?php endif; ?>
<?php if ($view->containsModules('position-29')) : ?>
<div class="art-hmenu-extra2"><?php echo $view->position('position-29'); ?></div>
<?php endif; ?>
<?php echo $view->position('position-1'); ?>
 
    </nav>
<?php endif; ?>
  
<header class="art-header"><?php echo $view->position('position-30', 'art-nostyle'); ?>

    <div class="art-shapes">
        
            </div>

<h1 class="art-headline">
    <a href="<?php echo $document->baseurl; ?>/"><?php echo $this->params->get('siteTitle'); ?></a>
</h1>
<h2 class="art-slogan"><?php echo $this->params->get('siteSlogan'); ?></h2>

<div class="art-positioncontrol art-positioncontrol-1586082665" id="CONTROL-ID">
<?php echo $view->position('position-31', 'art-nostyle'); ?></div>
<div class="art-positioncontrol art-positioncontrol-704743695" id="CONTROL-ID-1">
<?php echo $view->position('position-32', 'art-nostyle'); ?></div>
                  
</header>
<?php if ($view->containsModules('position-75', 'position-76', 'position-77', 'position-78', 'position-79', 'position-80', 'position-81','position-82','position-83','position-84','position-85','position-86','position-87','position-88' ,'position-89')) : ?>
 <div class="art-layout-cell art-content2">
<?php
  echo $view->position('position-75', 'art-nostyle');
  if ($view->containsModules('position-76'))
    echo artxPost($view->position('position-76'));
  echo $view->positions(array('position-77' => 50, 'position-78' => 50), 'art-article');
  echo $view->positions(array('position-79' => 33, 'position-80' => 33, 'position-81' => 34), 'art-article');
  echo $view->position('position-82', 'art-nostyle');
  echo $view->position('position-83', 'art-article');
  echo $view->positions(array('position-84' => 50, 'position-85' => 50), 'art-article');
  echo $view->position('position-86', 'art-nostyle');
  echo $view->positions(array('position-87' => 33, 'position-88' => 33, 'position-89' => 34), 'art-article');
?>
</div>    
 <?php endif; ?> 
              
<div class="art-sheet clearfix">
            <?php echo $view->position('position-15', 'art-nostyle'); ?>
            <?php echo $view->position('position-43', 'art-article'); ?>
<?php echo $view->positions(array('position-16' => 33, 'position-17' => 33, 'position-18' => 34), 'art-block'); ?>
<?php echo $view->positions(array('position-44' => 25, 'position-45' => 25, 'position-46' => 25, 'position-47' => 25), 'art-block'); ?>
<div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <?php if ($view->containsModules('position-7', 'position-4', 'position-5')) : ?>
<div class="art-layout-cell art-sidebar1">
<?php echo $view->position('position-7', 'art-block'); ?>
<?php echo $view->position('position-4', 'art-block'); ?>
<?php echo $view->position('position-5', 'art-block'); ?>

                        </div>
<?php endif; ?>


<div class="art-layout-cell art-content">
<?php
  echo $view->position('position-19', 'art-nostyle');
  if ($view->containsModules('position-2'))
    echo artxPost($view->position('position-2'));
	if ($view->containsModules('position-48'))
    echo artxPost($view->position('position-48'));
  echo $view->positions(array('position-20' => 50, 'position-21' => 50), 'art-article');
  echo $view->positions(array('position-49' => 33, 'position-50' => 33, 'position-51' => 34), 'art-article');
  echo $view->position('position-12', 'art-nostyle');
  echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' art-messages'));
  echo '<jdoc:include type="component" />';
  echo $view->position('position-22', 'art-nostyle');
  echo $view->positions(array('position-23' => 50, 'position-24' => 50), 'art-article');
  echo $view->positions(array('position-52' => 33, 'position-53' => 33, 'position-54' => 34), 'art-article');
  echo $view->position('position-25', 'art-nostyle');
?>
                        </div>


<div class="art-content7"><?php echo $view->position('position-7', 'art-block'); ?></div>
<div class="art-content4"><?php echo $view->position('position-4', 'art-block'); ?></div>
<div class="art-content5"><?php echo $view->position('position-5', 'art-block'); ?></div>


                        <?php if ($view->containsModules('position-6', 'position-8', 'position-3')) : ?>
<div class="art-layout-cell art-sidebar2">
<?php echo $view->position('position-6', 'art-block'); ?>
<?php echo $view->position('position-8', 'art-block'); ?>
<?php echo $view->position('position-3', 'art-block'); ?>
                        </div>
<?php endif; ?>
                    </div>
                </div>
            </div>
<?php echo $view->positions(array('position-9' => 33, 'position-10' => 33, 'position-11' => 34), 'art-block'); ?>
<?php echo $view->positions(array('position-55' => 25, 'position-56' => 25, 'position-57' => 25, 'position-58' => 25), 'art-block'); ?>
<?php echo $view->position('position-26', 'art-nostyle'); ?>
<?php echo $view->position('position-59', 'art-article'); ?>

<footer class="art-footer">
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-2" style="width: 33%">
<?php if ($view->containsModules('position-33')) : ?>
    <?php echo $view->position('position-33', 'art-nostyle'); ?>
<?php else: ?>
        <p style="text-align: justify;"><br /></p>
    <?php endif; ?>
</div><div class="art-layout-cell layout-item-3" style="width: 34%">
<?php if ($view->containsModules('position-34')) : ?>
    <?php echo $view->position('position-34', 'art-nostyle'); ?>
<?php else: ?>
        <p style="text-align: justify;"><br /></p>
    <?php endif; ?>
</div><div class="art-layout-cell" style="width: 33%">
<?php if ($view->containsModules('position-35')) : ?>
    <?php echo $view->position('position-35', 'art-nostyle'); ?>
<?php else: ?>
        <p style="text-align: justify;"><br /></p>
    <?php endif; ?>
</div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-4">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-3" style="width: 25%">
<?php if ($view->containsModules('position-36')) : ?>
    <?php echo $view->position('position-36', 'art-nostyle'); ?>
<?php else: ?>
        <p><br /></p>
    <?php endif; ?>
</div><div class="art-layout-cell layout-item-3" style="width: 25%">
<?php if ($view->containsModules('position-37')) : ?>
    <?php echo $view->position('position-37', 'art-nostyle'); ?>
<?php else: ?>
        <p><br /></p>
    <?php endif; ?>
</div><div class="art-layout-cell layout-item-3" style="width: 25%">
<?php if ($view->containsModules('position-38')) : ?>
    <?php echo $view->position('position-38', 'art-nostyle'); ?>
<?php else: ?>
        <p><br /></p>
    <?php endif; ?>
</div><div class="art-layout-cell layout-item-3" style="width: 25%">
<?php if ($view->containsModules('position-39')) : ?>
    <?php echo $view->position('position-39', 'art-nostyle'); ?>
<?php else: ?>
        <p><br /></p>
    <?php endif; ?>
</div>
    </div>
</div>
</div>
<div class="art-content-layout layout-item-5">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-6" style="width: 100%">
<?php if ($view->containsModules('position-40')) : ?>
    <?php echo $view->position('position-40', 'art-nostyle'); ?>
<?php else: ?>
        <p><a title="RSS" class="art-rss-tag-icon" style="position: absolute; bottom: 2px; left: 5px; line-height: 9px;" href="#"></a></p><p style="text-align: center;">Copyright &copy; <?php echo date("Y") ?>. All Rights Reserved.<br /></p><p style="text-align: center;"><span style="font-size: 12px;">Design by&nbsp;</span><span style="color: rgb(246, 242, 234); font-size: 12px;">&nbsp;<a href="http://svtemplates.com/index.php/homepage-3" target="_blank" style="color: rgb(247, 92, 2); text-decoration: none; ">SVtemplates.com</a></span></p>
    <?php endif; ?>
</div>
    </div>
</div>
<div class="art-content-layout-wrapper layout-item-4">
<div class="art-content-layout layout-item-1">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-7" style="width: 50%">
<?php if ($view->containsModules('position-41')) : ?>
    <?php echo $view->position('position-41', 'art-nostyle'); ?>
<?php else: ?>
        <p><br /></p>
    <?php endif; ?>
</div><div class="art-layout-cell layout-item-8" style="width: 50%">
<?php if ($view->containsModules('position-42')) : ?>
    <?php echo $view->position('position-42', 'art-nostyle'); ?>
<?php else: ?>
        <p><br /></p>
    <?php endif; ?>
</div>
    </div>
</div>
</div>
<div class="art-layout-cell art-content3">
<?php
  echo $view->position('footer-1', 'art-nostyle');
  if ($view->containsModules('footer-2'))
    echo artxPost($view->position('footer-2'));
  echo $view->positions(array('footer-3' => 50, 'footer-4' => 50), 'art-article');
  echo $view->positions(array('footer-5' => 33, 'footer-6' => 33, 'footer-7' => 34), 'art-article');
  echo $view->position('footer-8', 'art-nostyle');
  echo $view->position('footer-9', 'art-article');
  echo $view->positions(array('footer-10' => 50, 'footer-11' => 50), 'art-article');
  echo $view->position('footer-12', 'art-nostyle');
  echo $view->positions(array('footer-13' => 33, 'footer-14' => 33, 'footer-15' => 34), 'art-block');
?>
</div>
</footer>

    </div>
</div>


<?php echo $view->position('debug'); ?>
</body>
</html>