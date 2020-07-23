<aside id="sidebar" class="col-sm-4" role="complementary">
	<?php get_template_part('template-parts/sidebar/section', 'testimonials'); ?>
	<?php
	if(is_active_sidebar( 'custom-sidebar-widget' )) {
		echo '<div id="sidebar-widget-area" class="sidebar-widget-area widget-area" >';
		dynamic_sidebar( 'custom-sidebar-widget' );
		echo '</div>';
	}
	?>
</aside>