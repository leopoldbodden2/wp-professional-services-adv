<?php get_header(); ?>

    <main class="row" role="main">
        <div class="container no-padding">
            <section id="main-content" class="col-sm-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; else: ?>
                    <p>No posts were found. Sorry!</p>
                <?php endif; ?>
            </section><!--/section-->

            <?php get_sidebar(); ?>
        </div><!--/container-->
    </main><!--/main-->

<?php get_template_part('template-parts/section', 'awards'); ?>

<?php get_footer(); ?>