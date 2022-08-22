<header class="normal">
	<a href="<?php echo home_url(); ?>/" class="logo"></a>
	<nav id="global">
		<ul class="global-items">
			<li><a href="<?php echo home_url(); ?>/"></a></li>
		</ul>
		<a href="<?php echo home_url(); ?>/contact/" class="btn_contact">
			<div class="in">お問い合わせ</div>
		</a>
	</nav>
</header>

<div class="nav_drawer">
	<div class="drawer_bg"></div>
	<div class="inner">
		<a href="<?php echo home_url(); ?>/" class="logo"></a>
	</div>
	<button type="button" class="drawer_button menu-trigger">
		<span></span>
		<span></span>
		<span></span>
	</button>
	<nav class="drawer_nav_wrapper" id="drawer">
		<?php get_template_part('drawer'); ?>
	</nav>
</div>

<?php get_template_part('title'); ?>
