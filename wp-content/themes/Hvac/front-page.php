<?php get_header() ?>

    <?php if ( is_active_sidebar('custom-header-bottom-widget') ) : ?>
        <?php dynamic_sidebar('custom-header-bottom-widget'); ?>
    <?php endif; ?>

    <main id="front-page-main" class="row" role="main">
        <div class="container no-padding">
            <section id="main-content-front-page" class="col-xs-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
					<?php _e( 'No posts were found. Sorry!' ); ?><br/>
				<?php endif; ?>
            </section>
        </div>
    </main>


<?php get_template_part( 'template-parts/section', 'testimonials' ); ?>

<?php get_template_part( 'template-parts/section', 'awards' ); ?>

<?php get_template_part( 'template-parts/section', 'callouts' ); ?>

<?php get_template_part( 'template-parts/section', 'map' ); ?>

<?php get_footer(); ?>