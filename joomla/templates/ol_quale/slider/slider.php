<?php
/**
* @subpackage  ol_quale Template
*/

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();//define path
$base_url = $this->baseurl;
$tpl_name = $this->template;
$css_urla = ''.$base_url.'/templates/'.$tpl_name.'/slider/css/';
$scripts_urla = ''.$base_url.'/templates/'.$tpl_name.'/slider/js/';

$caption         = $this->params->get ('caption');
$menu            = $this->params->get ('menu');
$stylew	     = $this->params->get('stylew');
$styleh	     = $this->params->get('styleh');
$sliders_thumb1 	= $this->params->get('sliders_thumb1', '' );
$sliders_thumb2 	= $this->params->get('sliders_thumb2', '' );
$sliders_thumb3 	= $this->params->get('sliders_thumb3', '' );
$sliders_thumb4 	= $this->params->get('sliders_thumb4', '' );
$sliders_thumb5 	= $this->params->get('sliders_thumb5', '' );
$sliders_thumb6 	= $this->params->get('sliders_thumb6', '' );

if ($sliders_thumb1 || $sliders_thumb2 || $sliders_thumb3 || $sliders_thumb4 || $sliders_thumb5) {
// use images from template manager
} else {
// use default images
$sliders_thumb1 = 'templates/' . $this->template . '/slider/header1.jpg';
$sliders_thumb2 = 'templates/' . $this->template . '/slider/header2.jpg';
}

$doc->addStyleSheet($css_urla.'layerslider.css');
$doc->addScript($scripts_urla.'greensock.js');
$doc->addScript($scripts_urla.'layerslider.transitions.js');
$doc->addScript($scripts_urla.'layerslider.kreaturamedia.jquery.js');

?>

<div id="layerslider" style="width:1000px;height:420px;max-width:1280px;"> 

<?php if ($sliders_thumb1): ?>         
<div class="ls-slide" data-ls="slidedelay:6000;transition2d:all;transition3d:;"><img src="<?php echo $base_url; ?>/<?php echo $sliders_thumb1; ?>" class="ls-bg" alt=""/>
</div>
<?php endif;?>
<?php if ($sliders_thumb2): ?>
<div class="ls-slide" data-ls="slidedelay:6000;transition2d:all;transition3d:;"><img src="<?php echo $base_url; ?>/<?php echo $sliders_thumb2; ?>" class="ls-bg" alt=""/>
</div>
<?php endif;?>
<?php if ($sliders_thumb3): ?>
<div class="ls-slide" data-ls="slidedelay:6000;transition2d:all;transition3d:;"><img src="<?php echo $base_url; ?>/<?php echo $sliders_thumb3; ?>" class="ls-bg" alt=""/>
</div>
<?php endif;?>
<?php if ($sliders_thumb4): ?>
<div class="ls-slide" data-ls="slidedelay:6000;transition2d:all;transition3d:;"><img src="<?php echo $base_url; ?>/<?php echo $sliders_thumb4; ?>" class="ls-bg" alt=""/>
</div>
<?php endif;?>
<?php if ($sliders_thumb5): ?>
<div class="ls-slide" data-ls="slidedelay:6000;transition2d:all;transition3d:;"><img src="<?php echo $base_url; ?>/<?php echo $sliders_thumb5; ?>" class="ls-bg" alt=""/>
</div>
<?php endif;?>
</div>
<script>
jQuery("#layerslider").layerSlider({
pauseOnHover: true,
skin: 'v5',
hoverBottomNav: true,
skinsPath: '<?php echo $base_url; ?>/templates/ol_quale/slider/skins/'
});
</script>


