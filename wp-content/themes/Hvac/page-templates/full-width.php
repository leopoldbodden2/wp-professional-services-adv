<?php
/**
 * Template Name: Full Width No Header
 */
?>
<?php get_header(); ?>

    <main class="row" role="main">
        <div class="container-fluid no-padding">
            <section id="main-content" class="col-sm-12">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; else: ?>
                    <p>No posts were found. Sorry!</p>
                <?php endif; ?>
            </section><!--/section-->
        </div><!--/container-->
    </main><!--/main-->

<?php get_footer(); ?>