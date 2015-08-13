<?php

/**
* @package     Joomla.Site
* @subpackage  mod_articles_popular
*
* @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
* @license     GNU General Public License version 2 or later; see LICENSE.txt
*/
defined('_JEXEC') or die;
?>
<ul class="mostread<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) : ?>
<li>
<a href="<?php echo $item->link; ?>">
<i class="fa fa-angle-right"></i> <?php echo $item->title; ?></a>
</li>
<?php endforeach; ?>
</ul>
