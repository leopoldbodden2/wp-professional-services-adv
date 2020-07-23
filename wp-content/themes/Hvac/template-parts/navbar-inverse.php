<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
	        <?php if ( function_exists( 'prof_serv_get_custom_logo' ) ): ?>
                <a id="logo" href="<?= get_site_url(); ?>/" title="<?= get_bloginfo('name'); ?> Home" class="navbar-left">
			        <?php prof_serv_get_custom_logo(); ?>
                </a>
	        <?php endif; ?>

	        <?php do_action( 'before_sidebar' ); ?>
	        <?php if ( ! dynamic_sidebar( 'custom-navbar-right-widget' ) ) : ?>
                <a href="tel:1231231234" class="btn btn-default navbar-btn navbar-btn-cta">
                    Call us for a Free Estimate<br>
                    <strong>123-123-1234</strong>
                </a>
                <img src="<?= IMAGES; ?>/factory-authorized-dealer-carrier.jpg" class="navbar-right visible-lg visible-md">
	        <?php endif; ?>
	        <?php do_action( 'after_sidebar' ); ?>
        </div>
        <div class="collapse navbar-collapse navbar-inverse-collapse">

        </div>
    </div>
</nav>