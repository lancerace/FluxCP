<?php if (!defined('FLUX_ROOT')) {
    exit;
} ?>

<nav class="navbar fixed-top navbar-expand-lg navbar-light double-nav scrolling-navbar ">
	<span class="navbar-brand">RAGNAROK ASIA</span>
		    <!-- Collapse button -->
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
		        aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		    </button>

		    <!-- Collapsible content -->
		    <div class="collapse navbar-collapse " id="basicExampleNav">

			<ul class="navbar-nav mr-auto">

				<?php $menuItems = $this->getMenuItems(); ?>
		<?php if (!empty($menuItems)): ?>
<?php foreach ($menuItems as $menuCategory => $menus): ?>
<?php if (!empty($menus)): ?>
<!--drop down -->
<li class="nav-item dropdown pl-5">
  <!--dropdown item title -->
  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php echo htmlspecialchars(Flux::message($menuCategory)) ?>
  </a>

  <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
    <?php foreach ($menus as $menuItem):  ?>
    <a class="zoom" href="<?php echo $menuItem['url'] ?>">
      <?php echo htmlspecialchars(Flux::message($menuItem['name'])) ?>
    </a>
    <?php endforeach ?>
  </div>
</li>
<?php endif ?>
<?php endforeach ?>
<?php endif ?>

<?php $adminMenuItems = $this->getAdminMenuItems(); ?>
<?php if (!empty($adminMenuItems) && Flux::config('AdminMenuNewStyle')): ?>

<li class="nav-item dropdown pl-5">
  <!--dropdown item title -->
  <a href="#" class="nav-link dropdown-toggle">Admin Menu</a>
  <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
    <?php foreach ($adminMenuItems as $menuItem): ?>

    <a class="zoom" href="<?php echo $this->url($menuItem['module'], $menuItem['action']) ?>">
      <?php echo htmlspecialchars(Flux::message($menuItem['name'])) ?>
    </a>

    <?php endforeach ?>
  </div>
</li>
<?php endif ?>

</ul>
</div>
<!--/.nav-collapse -->

</nav>
