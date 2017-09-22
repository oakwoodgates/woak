<?php
?>
<header id="masthead" class="site-header">
	<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<?php the_custom_logo(); ?>
		<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		 <?php
		 wp_nav_menu([
		   'menu'            => 'primary',
		   'theme_location'  => 'primary',
		   'container'       => 'div',
		   'container_id'    => 'bs4navbar',
		   'container_class' => 'collapse navbar-collapse',
		   'menu_id'         => false,
		   'menu_class'      => 'navbar-nav mr-auto',
		   'depth'           => 3,
		   'fallback_cb'     => 'bs4navwalker::fallback',
		   'walker'          => new bs4navwalker()
		 ]);
		 ?>
		</div>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->
