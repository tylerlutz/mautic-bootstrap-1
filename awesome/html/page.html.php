<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$view->extend(':$template:base.html.php');
$parentVariant	= $page->getVariantParent();
$title			= (!empty($parentVariant)) ? $parentVariant->getTitle() : $page->getTitle();
$view['slots']->set('public', (isset($public) && $public === true) ? true : false);
$view['slots']->set('pageTitle', $title);
?>

<div class="container">
	
	<?php if ($view['slots']->hasContent('top')): ?>
		<div class="row">
			<?php $view['slots']->output('top'); ?>
		</div>
	<?php endif; ?>

	<div class="row">
		<?php if ($view['slots']->hasContent('left')): ?>
			<div class="col-sm-6">
				<?php $view['slots']->output('left'); ?>
			</div>
		<?php endif; ?>

		<?php if ($view['slots']->hasContent('right')): ?>
			<div class="col-sm-6">
				<?php $view['slots']->output('right'); ?>
			</div>
		<?php endif; ?>	
	</div>

	<?php if ($view['slots']->hasContent('bottom')): ?>
		<div class="row">
			<?php $view['slots']->output('bottom'); ?>
		</div>
	<?php endif; ?>	

	<hr />

	<?php if ($view['slots']->hasContent('footer')): ?>
		<div class="row">
			<?php $view['slots']->output('footer'); ?>
		</div>
	<?php endif; ?>	

</div>

<?php $view['slots']->output('builder'); ?>