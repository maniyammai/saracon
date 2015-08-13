<?php
/**
* @author    pickjoomla.com http://www.pickjoomla.com
* @copyright copyright (c) 2008-2015 pickjoomla.com. all rights reserved
* @license   GNU/GPL v2 http://www.gnu.org/licenses/gpl-2.0.html
*/
defined('_JEXEC') or die('Restricted index access');
$root					= $this->baseurl;
$template				= $this->template;
$images					= ''.$root.'/templates/'.$template.'/images/';
$includes				= 'templates/'.$template.'/inc/';
$css					= ''.$root.'/templates/'.$template.'/css/';
$app											= JFactory::getApplication();
$doc											= JFactory::getDocument();
$user											= JFactory::getUser();
$this->language									= $doc->language;
$this->direction								= $doc->direction;
$sitename                                       = $app->getCfg('sitename');
$menuid                                         = $this->params->get('menuid');
$menu                                           = $app->getMenu();
$params = $app->getTemplate(true)->params;
if ($this->params->get('logoFile'))
{
$logo = '<img src="'. JURI::root() . $this->params->get('logoFile') .'" alt="'. $sitename .'" />';
}
elseif ($this->params->get('sitetitle'))
{
$logo = '<span class="site-title" title="'. $sitename .'">'. htmlspecialchars($this->params->get('sitetitle')) .'</span>';
}
else
{
$logo = '<img src="'. $images .'/logo.png" alt="'. $sitename .'" />';
}
$var_resp_css					= 'bootstrap.min.css';
$header_top_1or2_position       = (($this->countModules('header_top1 or header_top2')) or ($logo));
$header_top1                    = $this->countModules('header_top1');
$header_top2                    = $this->countModules('header_top2');
$header_1or2or3or4_position     = $this->countModules('header1 or header2 or header3 or header4');
$header1_position               = $this->countModules('header1');
$header2_position               = $this->countModules('header2');
$header3_position               = $this->countModules('header3');
$header4_position               = $this->countModules('header4');
$navigation_position            = $this->countModules('navigation');
$top_1or2or3or4_position        = $this->countModules('top1 or top2 or top3 or top4');
$top1_position                  = $this->countModules('top1');
$top2_position                  = $this->countModules('top2');
$top3_position                  = $this->countModules('top3');
$top4_position                  = $this->countModules('top4');
$bottom_1or2or3or4_position     = $this->countModules('bottom1 or bottom2 or bottom3 or bottom4');
$bottom1_position               = $this->countModules('bottom1');
$bottom2_position               = $this->countModules('bottom2');
$bottom3_position               = $this->countModules('bottom3');
$bottom4_position               = $this->countModules('bottom4');
$footer_1or2or3or4_position     = $this->countModules('footer1 or footer2 or footer3 or footer4');
$footer1_position               = $this->countModules('footer1');
$footer2_position               = $this->countModules('footer2');
$footer3_position               = $this->countModules('footer3');
$footer4_position               = $this->countModules('footer4');
$footer_position                = $this->countModules('footer');
$maxWidth						= $this->params->get('maxWidth');
$slideshow_effect                               = $this->params->get('slideshow_effect','basic_linear');
$thumbs_wrapper_width							= '100';																 
$count_images                                   = $this->params->get('count_images');									  
$thumbs_margin									= $count_images * 0.98;													  
$thumbs_padding									= $count_images * 0.58;													  
$thumbs_total_margin_padding					= $thumbs_margin + $thumbs_padding;	
$var_resp_class =								'container_12';
$slideshow_style                                = $this->params->get('slideshow_style', 'template_glass');
$mod_slideshow                                  = $this->countModules('slideshow');
$slideshow_type                                 = $this->params->get('slideshow_type', 'site_slideshow','module_slideshow');
$slideshow_layout                               = $this->params->get('slideshow_layout', 'on_top','with_col');
$slideshow_navigation_options                   = $this->params->get('slideshow_navigation_options', 'enable','disable');
$slideshow_text_opacity                         = $this->params->get('slideshow_text_opacity','0.5');
$slideshow_text_margin_bottom                   = $this->params->get('slideshow_text_margin_bottom');
$slideshow_readmore_text                        = $this->params->get('slideshow_readmore_text');
$autoPlay                                       = $this->params->get('autoPlay', true,false);
$playPause                                      = $this->params->get('playPause', true,false);
$stopOnHover                                    = $this->params->get('stopOnHover', true,false);
$nav_bg_image_default                           = $this->params->get('nav_bg_image_default');
$nav_bg_image_file                              = $this->params->get('nav_bg_image_file');
$menu_text_transform                            = $this->params->get('menu_text_transform','inherit','uppercase','lowercase','capitalize');
$nagivation_font_weight                         = $this->params->get('nagivation_font_weight','normal','bold');
$var_resp										= 'grid_';
$doc->addStyleSheet($includes.'slideshow/styles/glass/engine1/style.css'); 
$doc->addStyleSheet($css.'960.css');
$doc->addStyleSheet($css.$var_resp_css);
$doc->addStyleSheet($css.'responsive.css');
$doc->addStyleSheet($css.'navigation.css');
$doc->addStyleSheet($css.'template.css');
$doc->addStyleSheet($css.'general.css');
JHtml::_('bootstrap.framework');	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<meta charset="utf-8">  
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<jdoc:include type="head" />
<?php
$u = $_SERVER['HTTP_USER_AGENT'];
$isIE7  = (bool)preg_match('/msie 7./i', $u );
$isIE8  = (bool)preg_match('/msie 8./i', $u );
$isIE9  = (bool)preg_match('/msie 9./i', $u );
$isIE10 = (bool)preg_match('/msie 10./i', $u );
if ($isIE7 || $isIE8 || $isIE9 ) 
{
$doc->addScript('http://html5shim.googlecode.com/svn/trunk/html5.js'); 
$doc->addScript('http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js');  
}
?>
</head>
<?php $header_top=0;
$pos_header_top = 'header_top';
for ($i=1; $i<=2 ; $i++) { if (($this->countModules($pos_header_top.$i)) or ($logo)) { $header_top++; } } ?>
<?php if ($header_top == 2) : $header_top_val = '6'; else: $header_top_val = '12';; endif; ?>
<?php $header=0;
$pos_header = 'header';
for ($i=1; $i<=4 ; $i++) { if ($this->countModules($pos_header.$i)) { $header++; } } ?>
<?php if ($header == 2) : $header_val = '6'; elseif ($header == 3) : $header_val = '4'; elseif ($header == 4) : $header_val = '3'; else: $header_val = '12';; endif; ?>
<?php $top=0;
$pos_top = 'top';
for ($i=1; $i<=4 ; $i++) { if ($this->countModules($pos_top.$i)) { $top++; } } ?>
<?php if ($top == 2) : $top_val = '6'; elseif ($top == 3) : $top_val = '4'; elseif ($top == 4) : $top_val = '3'; else: $top_val = '12';; endif; ?>
<?php $bottom=0;
$pos_bottom = 'bottom';
for ($i=1; $i<=4 ; $i++) { if ($this->countModules($pos_bottom.$i)) { $bottom++; } } ?>
<?php if ($bottom == 2) : $bottom_val = '6'; elseif ($bottom == 3) : $bottom_val = '4'; elseif ($bottom == 4) : $bottom_val = '3'; else: $bottom_val = '12';; endif; ?>
<?php $footer=0;
$pos_footer = 'footer';
for ($i=1; $i<=4 ; $i++) { if ($this->countModules($pos_footer.$i)) { $footer++; } } ?>
<?php if ($footer == 2) : $footer_val = '6'; elseif ($footer == 3) : $footer_val = '4'; elseif ($footer == 4) : $footer_val = '3'; else: $footer_val = '12';; endif; ?>
<body>
<?php if ($header_top_1or2_position) : ?>
<div class="<?php echo $var_resp_class; ?>">
<?php if ($header_top1) : ?>
<div class="<?php echo $var_resp; ?><?php echo $header_top_val; ?>">
<jdoc:include type="modules" name="header_top1" style="crate_notitle" />
</div>
<?php else : ?>
<div class="<?php echo $var_resp; ?><?php echo $header_top_val; ?>">
<div class="crate">
<a href="<?php echo $this->baseurl; ?>">
<?php echo $logo;?>
<?php if ($this->params->get('sitedescription'))
{
echo '<div class="site-description">'. htmlspecialchars($this->params->get('sitedescription')) .'</div>';
}
?>
</a>
</div>
</div>
<?php endif; ?>
<?php if ($header_top2) : ?>
<div class="<?php echo $var_resp; ?><?php echo $header_top_val; ?>"><jdoc:include type="modules" name="header_top2" style="color2_notitle" />
</div>
<?php else : ?>
<?php endif; ?>
<div class="clear"></div>
</div>
<?php endif; ?>
<?php if ($header_1or2or3or4_position) : ?>
<div class="<?php echo $var_resp_class; ?>">
<?php if ($header1_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $header_val; ?>">
<jdoc:include type="modules" name="header1" style="crate_notitle" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($header2_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $header_val; ?>">
<jdoc:include type="modules" name="header2" style="crate_notitle" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($header3_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $header_val; ?>">
<jdoc:include type="modules" name="header3" style="crate_notitle" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($header4_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $header_val; ?>">
<jdoc:include type="modules" name="header4" style="crate_notitle" />
</div>
<?php endif; ?>
<div class="clear"></div>
</div>
<?php endif; ?>
<?php if ($navigation_position) : ?>
<div class="<?php echo $var_resp_class; ?>">
<div id="hor_nav" class="<?php echo $var_resp; ?>12">
<jdoc:include type="modules" name="navigation" style="no" />
</div>
<div class="clear"></div>
</div>
<?php endif; ?>
<?php
$Image[]= $this->params->get( '!', "" );
$Slidetext[]= $this->params->get( '!', "" );
$Link[]= $this->params->get( '!', "" );
for ($j=1; $j<=4; $j++){
$Image[$j]      = $this->params->get ("Image".$j,"" );
$Slidetext[$j]    = $this->params->get ("Slidetext".$j , "" );
$Link[$j]       = $this->params->get ("Link".$j , "" );
}
$st_image1 = ''. $images .'slideshow/header1.jpg';
$st_image2 = ''. $images .'slideshow/header2.jpg';
$st_image3 = ''. $images .'slideshow/header3.jpg';
$st_image4 = ''. $images .'slideshow/header4.jpg';
$info1 = $this->params->get('Slidetext1');
$info2 = $this->params->get('Slidetext2');
$info3 = $this->params->get('Slidetext3');
$info4 = $this->params->get('Slidetext4');
$img1 = $this->params->get('Image1');
$img2 = $this->params->get('Image2');
$img3 = $this->params->get('Image3');
$img4 = $this->params->get('Image4');
?>
<?php if (($img1 == null) && ($img2 == null) && ($img3 == null) && ($img4 == null)) : ?>
<div class="<?php echo $var_resp_class; ?>">
<div class="<?php echo $var_resp; ?>12">
<div id="wowslider-container1">
<div class="ws_images">
<ul>
<li>
<img src="<?php echo $st_image1; ?>" title="<?php echo $info1 ?>"/> 					   
</li>
<li>
<img src="<?php echo $st_image2; ?>" title="<?php echo $info2 ?>"/> 					   
</li>
<li>
<img src="<?php echo $st_image3; ?>" title="<?php echo $info3 ?>"/> 					   
</li>
<li>
<img src="<?php echo $st_image4; ?>" title="<?php echo $info4 ?>"/> 					   
</li>
</ul>
</div>
</div>
</div>
<div class="clear"></div>
</div>
<?php elseif (is_array($menuid) && is_object($menu) && isset($menu->getActive()->id) && in_array($menu->getActive()->id, $menuid, true)) : ?> 
<div class="<?php echo $var_resp_class; ?>">
<div class="<?php echo $var_resp; ?>12">
<div id="wowslider-container1">
<div class="ws_images">
<ul>
<?php for ($i=1; $i<=4; $i++){ if ($Image[$i] != null) { ?>   															
<li>
<?php if ($Link[$i] == null) : ?>                                                 														
<img src="<?php echo $Image[$i] ?>" alt="" title="<?php echo $Slidetext[$i] ?>"/> 					   
<?php else: ?>	                                      																						
<a href="<?php echo $Link[$i] ?>"><img src="<?php echo $Image[$i] ?>" alt="" title="<?php echo $Slidetext[$i] ?>"/></a>	
<?php endif; ?>                                                                                        
</li>
<?php }};  ?>	                                          		   																
</ul>
</div>
</div>
</div>
<div class="clear"></div>
</div>
<?php else: ?> 
<?php endif; ?>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/inc/slideshow/effects/wowslider.js"></script>
<?php if ($slideshow_effect == "basic_linear") : ?>	
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/inc/slideshow/effects/b_linear/script.js"></script>
<?php endif; ?>
<script>
jQuery("#wowslider-container1").wowSlider
({
effect:"<?php echo $slideshow_effect ?>",
prev:"",
next:"",
duration:35*130,
delay:30*150,
width:960,
height:100,
autoPlay:<?php echo $autoPlay ?>,
playPause:<?php echo $playPause ?>,
stopOnHover:<?php echo $stopOnHover ?>,
bullets:true,
caption:true,
captionEffect:"slide",
controls:true,
onBeforeStep:0,
images:0
});
</script>
<?php if ($top_1or2or3or4_position) : ?>
<div class="<?php echo $var_resp_class; ?>">
<?php if ($top1_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $top_val; ?>">
<jdoc:include type="modules" name="top1" style="crate" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($top2_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $top_val; ?>">
<jdoc:include type="modules" name="top2" style="crate" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($top3_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $top_val; ?>">
<jdoc:include type="modules" name="top3" style="crate" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($top4_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $top_val; ?>">
<jdoc:include type="modules" name="top4" style="crate" />
</div>
<?php endif; ?>
<div class="clear"></div>
</div>
<?php endif; ?>
<?php if ($this->countModules('left') && $this->countModules('right')): ?>
<div class="<?php echo $var_resp_class; ?>">
<div class="<?php echo $var_resp; ?>3">
<jdoc:include type="modules" name="left" style="crate" />
</div>
<div class="<?php echo $var_resp; ?>6">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
<div class="<?php echo $var_resp; ?>3">
<jdoc:include type="modules" name="right" style="crate" />
</div>
<div class="clear"></div>
</div>
<?php elseif ( $this->countModules('left')) : ?>
<div class="<?php echo $var_resp_class; ?>">
<div class="<?php echo $var_resp; ?>3">
<jdoc:include type="modules" name="left" style="crate" />
</div>
<div class="<?php echo $var_resp; ?>9">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
<div class="clear"></div>
</div>
<?php elseif ( $this->countModules('right')): ?>
<div class="<?php echo $var_resp_class; ?>">
<div class="<?php echo $var_resp; ?>9">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
<div class="<?php echo $var_resp; ?>3">
<jdoc:include type="modules" name="right" style="crate" />
</div>
<div class="clear"></div>
</div>
<?php else : ?>
<div class="<?php echo $var_resp_class; ?>">
<div class="<?php echo $var_resp; ?>12">
<jdoc:include type="message" />
<jdoc:include type="component" />
</div>
<div class="clear"></div>
</div>
<?php endif; ?>
<?php if ($bottom_1or2or3or4_position) : ?>
<div class="<?php echo $var_resp_class; ?>">
<?php if ($bottom1_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $bottom_val; ?>">
<jdoc:include type="modules" name="bottom1" style="crate" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($bottom2_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $bottom_val; ?>">
<jdoc:include type="modules" name="bottom2" style="crate" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($bottom3_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $bottom_val; ?>">
<jdoc:include type="modules" name="bottom3" style="crate" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($bottom4_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $bottom_val; ?>">
<jdoc:include type="modules" name="bottom4" style="crate" />
</div>
<?php endif; ?>
<div class="clear"></div>
</div>
<?php endif; ?>
<?php if ($footer_1or2or3or4_position) : ?>
<div class="<?php echo $var_resp_class; ?>">
<?php if ($footer1_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $footer_val; ?>">
<jdoc:include type="modules" name="footer1" style="crate" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($footer2_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $footer_val; ?>">
<jdoc:include type="modules" name="footer2" style="crate" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($footer3_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $footer_val; ?>">
<jdoc:include type="modules" name="footer3" style="crate" />
</div>
<?php else : ?>
<?php endif; ?>
<?php if ($footer4_position) : ?>
<div class="<?php echo $var_resp; ?><?php echo $footer_val; ?>">
<jdoc:include type="modules" name="footer4" style="crate" />
</div>
<?php endif; ?>
<div class="clear"></div>
</div>
<?php endif; ?>
<?php if ($footer_position) : ?>
<div class="<?php echo $var_resp_class; ?>">
<div class="<?php echo $var_resp; ?>12">
<jdoc:include type="modules" name="footer" style="color3_notitle" />
<p class="copyright_info">Designed by <a href="http://www.pickjoomla.com" target="_blank" title="www.pickjoomla.com">Pickjoomla</a></p>
</div>
<div class="clear"></div>
</div>
<?php else: ?> 
<div class="<?php echo $var_resp_class; ?>">
<div class="<?php echo $var_resp; ?>12">
<div class="color3">
Designed by <a href="http://www.pickjoomla.com" target="_blank" title="www.pickjoomla.com">Pickjoomla</a>
</div>
</div>
<div class="clear"></div>
</div>
<?php endif; ?>
</body>
</html>