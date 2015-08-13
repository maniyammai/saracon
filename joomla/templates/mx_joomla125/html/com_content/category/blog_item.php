<?php

// no direct access
defined('_JEXEC') or die;


// Create a shortcut for params.
$params 	= &$this->item->params;
$images 	= json_decode($this->item->images);
$canEdit 	= $this->item->params->get('access-edit');
JHtml::addIncludePath(JPATH_COMPONENT.'/helpers/html');
$info 		= $this->item->params->get('info_block_position', 0);
JHtml::_('behavior.tooltip');
JHtml::_('behavior.framework');

$parentslug = '';
$catslug = '';

?>
<article class="item-page<?php echo $this->pageclass_sfx?>">	
<?php if (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_publish_date')) or ($params->get('show_parent_category')) or ($params->get('show_hits')) or $params->get('show_print_icon') or $params->get('show_email_icon') or $canEdit or $params->get('show_title')) : ?>

<?php if ($params->get('show_create_date')) : ?>
<time datetime="<?php echo JHtml::_('date', $this->item->created, 'Y-m-d'); ?>">
<?php echo JHtml::_('date', $this->item->created, JText::_('d M')); ?>
</time>
<?php endif; ?>

<header>
<?php if ($params->get('show_title')) : ?>
<h1>
<?php if ($params->get('link_titles') && $params->get('access-view')) : ?>
<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid)); ?>">
<?php echo $this->escape($this->item->title); ?></a>
<?php else : ?>
<?php echo $this->escape($this->item->title); ?>
<?php endif; ?>
</h1>
<?php endif; ?>		

<?php if (($params->get('show_author')) or ($params->get('show_category')) or ($params->get('show_create_date')) or ($params->get('show_modify_date')) or ($params->get('show_publish_date')) or ($params->get('show_parent_category')) or ($params->get('show_hits')) or $params->get('show_print_icon') or $params->get('show_email_icon') or $canEdit or ($params->get('show_create_date'))) : ?>
<ul>
<?php if ($params->get('show_parent_category') && $this->item->parent_id != 1) : ?>
<li class="parent-category-name">
<?php $title = $this->escape($this->item->parent_title);
$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->parent_id)) . '">' . $title . '</a>'; ?>
<?php if ($params->get('link_parent_category')) : ?>
<?php echo JText::sprintf('COM_CONTENT_PARENT', $url); ?>
<?php else : ?>
<?php echo JText::sprintf('COM_CONTENT_PARENT', $title); ?>
<?php endif; ?>
</li>
<?php endif; ?>

<?php if ($params->get('show_category')) : ?>
<li class="category-name">
<?php $title = $this->escape($this->item->category_title);
$url = '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($this->item->catid)) . '">' . $title . '</a>'; ?>
<?php if ($params->get('link_category')) : ?>
<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $url); ?>
<?php else : ?>
<?php echo JText::sprintf('COM_CONTENT_CATEGORY', $title); ?>
<?php endif; ?>
</li>
<?php endif; ?>

<?php if ($params->get('show_modify_date')) : ?>
<li class="modified">
<?php echo JText::sprintf('COM_CONTENT_LAST_UPDATED', JHtml::_('date', $this->item->modified, JText::_('DATE_FORMAT_LC2'))); ?>
</li>
<?php endif; ?>

<?php if ($params->get('show_publish_date')) : ?>
<li class="published">
<?php echo JText::sprintf('COM_CONTENT_PUBLISHED_DATE_ON', JHtml::_('date', $this->item->publish_up, JText::_('DATE_FORMAT_LC2'))); ?>
</li>
<?php endif; ?>

<?php if ($params->get('show_author') && !empty($this->item->author )) : ?>
<li class="createdby">
<?php $author =  $this->item->author; ?>
<?php $author = ($this->item->created_by_alias ? $this->item->created_by_alias : $author);?>

<?php if (!empty($this->item->contactid ) &&  $params->get('link_author') == true):?>
<?php 	echo JText::sprintf('COM_CONTENT_WRITTEN_BY' ,
JHtml::_('link', JRoute::_('index.php?option=com_contact&view=contact&id='.$this->item->contactid), $author)); ?>

<?php else :?>
<?php echo JText::sprintf('COM_CONTENT_WRITTEN_BY', $author); ?>
<?php endif; ?>
</li>
<?php endif; ?>

<?php if ($params->get('show_hits')) : ?>
<li class="hits">
<?php echo JText::sprintf('COM_CONTENT_ARTICLE_HITS', $this->item->hits); ?>
</li>
<?php endif; ?>

<?php if ($params->get('show_print_icon')) : ?>
<li class="print-icon">
<?php echo JHtml::_('icon.print_popup', $this->item, $params); ?>
</li>
<?php endif; ?>

<?php if ($params->get('show_email_icon')) : ?>
<li class="email-icon">
<?php echo JHtml::_('icon.email', $this->item, $params); ?>
</li>
<?php endif; ?>

<?php if ($canEdit) : ?>
<li class="edit-icon">
<?php echo JHtml::_('icon.edit', $this->item, $params); ?>
</li>
<?php endif; ?>

<?php if ($params->get('show_create_date')) : ?>
<li class="item-date">
<?php echo JHtml::_('date', $this->item->created, JText::_('d M')); ?>
</li>
<?php endif; ?>
</ul>
<?php endif; ?>
</header>
<?php endif; ?>

<?php if (!$params->get('show_intro')) : ?>
<?php echo $this->item->event->afterDisplayTitle; ?>
<?php endif; ?>

<?php echo $this->item->event->beforeDisplayContent; ?>

<?php  if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
<div class="img-intro-<?php echo $images->float_intro ? $images->float_intro : $params->get('float_intro'); ?>">
<img
<?php if ($images->image_intro_caption):
echo 'class="caption"'.' title="' .$images->image_intro_caption .'"';
endif; ?>
<?php if (!empty($images->image_intro)):?>
style="float:<?php echo  $params->get('float_intro') ?>"
<?php else: ?>
style="float:<?php echo  $images->float_intro ?>"
<?php endif; ?>
src="<?php echo $images->image_intro; ?>" alt="<?php echo $images->image_intro_alt; ?>"/>
</div>
<?php endif; ?>

<?php echo $this->item->introtext; ?>

<?php if ($params->get('show_readmore') && $this->item->readmore) :
if ($params->get('access-view')) :
$link = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid));
else :
$menu = JFactory::getApplication()->getMenu();
$active = $menu->getActive();
$itemId = $active->id;
$link1 = JRoute::_('index.php?option=com_users&view=login&Itemid=' . $itemId);
$returnURL = JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug));
$link = new JURI($link1);
$link->setVar('return', base64_encode($returnURL));
endif;
?>
<a class="btn btn-primary" href="<?php echo $link; ?>">
<?php if (!$params->get('access-view')) :
echo JText::_('COM_CONTENT_REGISTER_TO_READ_MORE');
elseif ($readmore = $this->item->alternative_readmore) :
echo $readmore;
if ($params->get('show_readmore_title', 0) != 0) :
echo JHTML::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
endif;
elseif ($params->get('show_readmore_title', 0) == 0) :
echo JText::sprintf('COM_CONTENT_READ_MORE_TITLE');	
else :
echo JText::_('COM_CONTENT_READ_MORE');
echo JHTML::_('string.truncate', ($this->item->title), $params->get('readmore_limit'));
endif; ?></a>
<?php endif; ?>
</article>

<?php echo $this->item->event->afterDisplayContent; ?>