<?php if (!defined('FLUX_ROOT')) {
    exit;
} ?>
<?php $subMenuItems = $this->getSubMenuItems(); $menus = array() ?>
<?php if (!empty($subMenuItems)): ?>
	<div class="p-3 mb-3 img-thumbnail">
	<div id="submenu">
		<span class="h6-responsive brown-text">Menu:</span>

	<?php foreach ($subMenuItems as $menuItem): ?>
		<?php $menus[] = sprintf(
    '<div class="zoom d-inline-block" st><a href="%s" class="brown-text sub-menu-item%s">%s</a></div>',
            $this->url($menuItem['module'], $menuItem['action']),
            $params->get('module') == $menuItem['module'] && $params->get('action') == $menuItem['action'] ? ' current-sub-menu' : '',
            htmlspecialchars($menuItem['name'])
) ?>
	<?php endforeach ?>
	<?php //echo implode(' | ', $menus)?>

	<?php foreach ($menus as $singlemenu): ?>

		<span class="p-2"><?php echo $singlemenu;?> </span> |
	<?php endforeach ?>

	</div>
</div>
<?php endif ?>
