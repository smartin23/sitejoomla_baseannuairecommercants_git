<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_contact
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
$class = ' class="first"';
if (count($this->items[$this->parent->id]) > 0 && $this->maxLevelcat != 0) :
?>

<ul class="unstyled">
	<?php foreach($this->items[$this->parent->id] as $id => $item) : ?>
	<?php
	if($this->params->get('show_empty_categories_cat') || $item->numitems || count($item->getChildren())) :
	if(!isset($this->items[$this->parent->id][$id + 1]))
	{
		$class = ' class="last"';
	}
	?>
	<li<?php echo $class; ?>>
		<?php $class = ''; ?>
		<h3 class="item-title"><a href="<?php echo JRoute::_(ContactHelperRoute::getCategoryRoute($item->id));?>"> <?php echo $this->escape($item->title); ?></a> </h3>
		<?php if ($this->params->get('show_subcat_desc_cat') == 1) :?>
		<?php if ($item->description) : ?>
		<div class="category-desc"> <?php echo JHtml::_('content.prepare', $item->description, '', 'com_contact.categories'); ?> </div>
		<?php endif; ?>
		<?php endif; ?>
		<?php if ($this->params->get('show_cat_items_cat') == 1) :?>
		<p> <span class="label label-info"> <?php echo JText::_('COM_CONTACT_COUNT'); ?> <?php echo $item->numitems; ?> </span> </p>
		<?php endif; ?>
		<hr />
		<?php if(count($item->getChildren()) > 0) :
			$this->items[$item->id] = $item->getChildren();
			$this->parent = $item;
			$this->maxLevelcat--;
			echo $this->loadTemplate('items');
			$this->parent = $item->getParent();
			$this->maxLevelcat++;
		endif; ?>
	</li>
	<?php endif; ?>
	<?php endforeach; ?>
</ul>
<?php endif; ?>
