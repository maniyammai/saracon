<?php
/**
* @package   yoo_master2
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// get theme configuration
include($this['path']->path('layouts:theme.config.php'));

?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>"  data-config='<?php echo $this['config']->get('body_config','{}'); ?>'>
	<head>
		<?php echo $this['template']->render('head'); ?>
<style type="text/css">
.headerbar {max-height:<?php echo $this['config']->get('headerbar-height'); ?>}
</style>

	</head>
	<body class="<?php echo $this['config']->get('body_classes'); ?>">
		<!-- TOP Outer -->
		<?php if ($this['widgets']->count('toolbar-l + toolbar-r')) : ?>
		<div class="sw-top-outer uk-clearfix">
			<div class="uk-container uk-container-center no-space">
				<div class="tm-toolbar uk-clearfix">
					<?php if ($this['widgets']->count('toolbar-l')) : ?>
					<div class="uk-float-left"><?php echo $this['widgets']->render('toolbar-l'); ?></div>
					<?php endif; ?>
					<?php if ($this['widgets']->count('toolbar-r')) : ?>
					<div class="uk-float-right"><?php echo $this['widgets']->render('toolbar-r'); ?></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<?php endif; ?>


		<?php if ($this['widgets']->count('banner + logo')) : ?>
		<div id="logo-outer">
			<div class="uk-container uk-container-center no-space">
				<?php if ($this['widgets']->count('offcanvas')) : ?>
				<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
				<?php endif; ?>

				<?php if ($this['widgets']->count('logo')) : ?>
				<div class="logo uk-hidden-small">
					<a class="tm-logo" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo'); ?></a>
				</div>
				<?php endif; ?>

				<?php if ($this['widgets']->count('logo-small')) : ?>
				<div class="uk-visible-small">
					<a class="tm-logo-small" href="<?php echo $this['config']->get('site_url'); ?>"><?php echo $this['widgets']->render('logo-small'); ?></a>
				</div>
				<?php endif; ?>

				<?php if ($this['widgets']->count('banner')) : ?>
				<div class="uk-float-right uk-hidden-small" style="margin-top:4px"><?php echo $this['widgets']->render('banner'); ?></div>
				<?php endif; ?>

				</div>
			</div>
			<?php endif; ?>

			<?php if ($this['widgets']->count('menu')) : ?>
			<div style="z-index:999; position:relative" class="uk-container uk-container-center no-space uk-hidden-small">
				<nav class="tm-navbar uk-navbar no-space" <?php if ($this['config']->get('fixed_navigation')) : ?>data-uk-sticky="{top:-400, animation: 'uk-animation-slide-top'}"<?php endif; ?>>
					<?php echo $this['widgets']->render('menu'); ?>
					<?php if ($this['widgets']->count('search')) : ?>
					<div class="uk-navbar-flip">
						<div class="uk-hidden-small"><?php echo $this['widgets']->render('search'); ?></div>
					</div>
					<?php endif; ?>
				</nav>
			</div>
			<?php endif; ?>

			<?php if ($this['widgets']->count('headerbar')) : ?>
			<div class="headerbar">
				<?php echo $this['widgets']->render('headerbar'); ?>
			</div>
			<?php endif; ?>

			<!-- TOP Outer 2 -->
			<?php if ($this['widgets']->count('toolbar-3 + toolbar-4')) : ?>
			<div class="sw-top-outer2 uk-clearfix">
				<div class="uk-container uk-container-center no-space">
					<div class="tm-toolbar uk-clearfix">
						<?php if ($this['widgets']->count('toolbar-3')) : ?>
						<div class="uk-float-left"><?php echo $this['widgets']->render('toolbar-3'); ?></div>
						<?php endif; ?>
						<?php if ($this['widgets']->count('toolbar-4')) : ?>
						<div class="uk-float-right"><?php echo $this['widgets']->render('toolbar-4'); ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>

			<?php if ($this['widgets']->count('top-a')) : ?>
			<div id="top-a">
				<div class="uk-container uk-container-center">
					<section class="<?php echo $grid_classes['top-a']; echo $display_classes['top-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('top-a', array('layout'=>$this['config']->get('grid.top-a.layout'))); ?></section>
				</div>
			</div>
			<?php endif; ?>

			<?php if ($this['widgets']->count('top-b')) : ?>
			<div id="top-b">
				<div class="uk-container uk-container-center">
					<section class="<?php echo $grid_classes['top-b']; echo $display_classes['top-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('top-b', array('layout'=>$this['config']->get('grid.top-b.layout'))); ?></section>
				</div>
			</div>
			<?php endif; ?>

			<?php if ($this['widgets']->count('main-top + main-bottom + sidebar-a + sidebar-b') || $this['config']->get('system_output', true)) : ?>
        <div style="background:#eee" id="main">
				<div class="uk-container uk-container-center">

					<div class="tm-middle uk-grid" data-uk-grid-match data-uk-grid-margin>

						<?php if ($this['widgets']->count('main-top + main-bottom') || $this['config']->get('system_output', true)) : ?>
						<div class="<?php echo $columns['main']['class'] ?>">

							<?php if ($this['widgets']->count('main-top')) : ?>
							<section class="<?php echo $grid_classes['main-top']; echo $display_classes['main-top']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('main-top', array('layout'=>$this['config']->get('grid.main-top.layout'))); ?></section>
							<?php endif; ?>

			<?php if ($this['config']->get('system_output', true)) : ?>
				<main id="tm-content" class="tm-content">
					<?php if ($this['widgets']->count('breadcrumbs')) : ?>
					<?php echo $this['widgets']->render('breadcrumbs'); ?>
					<?php endif; ?>

					<?php echo $this['template']->render('content'); ?>

				</main>
				<?php endif; ?>

							<?php if ($this['widgets']->count('main-bottom')) : ?>
							<section class="<?php echo $grid_classes['main-bottom']; echo $display_classes['main-bottom']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('main-bottom', array('layout'=>$this['config']->get('grid.main-bottom.layout'))); ?></section>
							<?php endif; ?>

						</div>
						<?php endif; ?>

						<?php foreach($columns as $name => &$column) : ?>
						<?php if ($name != 'main' && $this['widgets']->count($name)) : ?>
						<aside class="<?php echo $column['class'] ?>"><?php echo $this['widgets']->render($name) ?></aside>
						<?php endif ?>
						<?php endforeach ?>

					</div>
				</div>
			</div>
			<?php endif; ?>

			<?php if ($this['widgets']->count('bottom-a')) : ?>
			<div id="bottom-a">
				<div class="uk-container uk-container-center">
					<section class="<?php echo $grid_classes['bottom-a']; echo $display_classes['bottom-a']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('bottom-a', array('layout'=>$this['config']->get('grid.bottom-a.layout'))); ?></section>
				</div>
			</div>
			<?php endif; ?>

			<?php if ($this['widgets']->count('bottom-b')) : ?>
			<div id="bottom-b">
				<div class="uk-container uk-container-center">
					<section class="<?php echo $grid_classes['bottom-b']; echo $display_classes['bottom-b']; ?>" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin><?php echo $this['widgets']->render('bottom-b', array('layout'=>$this['config']->get('grid.bottom-b.layout'))); ?></section>
				</div>
			</div>
			<?php endif; ?>


		<?php if ($this['widgets']->count('footer + debug') || $this['config']->get('warp_branding', true) || $this['config']->get('totop_scroller', true)) : ?>
		<footer id="tm-footer" class="tm-footer">

			<?php if ($this['config']->get('totop_scroller', true)) : ?>
			<a class="tm-totop-scroller" data-uk-smooth-scroll href="#"></a>
			<?php endif; ?>

			<?php
				echo $this['widgets']->render('footer');
				$this->output('warp_branding');
				echo $this['widgets']->render('debug');
			?>

		</footer>
		<?php endif; ?>

	</div>

	<?php echo $this->render('footer'); ?>

	<?php if ($this['widgets']->count('offcanvas')) : ?>
	<div id="offcanvas" class="uk-offcanvas">
		<div class="uk-offcanvas-bar"><?php echo $this['widgets']->render('offcanvas'); ?></div>
	</div>
	<?php endif; ?>

</body>
</html>