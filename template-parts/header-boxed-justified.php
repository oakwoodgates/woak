<?php
?>
<header id="masthead" class="site-header container">
	<?php the_custom_logo(); ?>
	<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
		<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<p class="site-description"><?php echo esc_html( $description ); ?></p>
		<?php endif; ?>
		<nav id="site-navigation" class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<?php
		wp_nav_menu([
			'menu'            => 'primary',
			'theme_location'  => 'primary',
			'container'       => 'div',
			'container_id'    => 'bs4navbar',
			'container_class' => 'collapse navbar-collapse justify-content-md-center',
			'menu_id'         => false,
			'menu_class'      => 'navbar-nav w-100',
			'depth'           => 3,
			'fallback_cb'     => 'bs4navwalker::fallback',
			'walker'          => new bs4navwalker()
		]);
		?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->
