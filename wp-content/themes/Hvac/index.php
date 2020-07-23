<?php get_header(); ?>

    <main class="row" role="main">
        <div class="container no-padding">
            <section id="main-content" class="col-sm-8">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                        <p><a href="<?php the_permalink(); ?>"><strong>Read more &raquo;</strong></a></p>
                        <hr>
                    <?php endwhile;
                    $prevPosts = get_previous_posts_link('<span class="previous_post">&laquo; Previous Page</span>');
                    $nextPosts = get_next_posts_link('<span class="next_post">Next Page &raquo;</span>');
                    if ($prevPosts && $nextPosts) : ?>
                        <p><?= $prevPosts ?><span id="prev-next-pipe">|</span><?= $nextPosts ?></p>
                    <?php elseif ($prevPosts) : ?>
                        <p><?= $prevPosts ?></p>
                    <?php elseif ($nextPosts) : ?>
                        <p><?= $nextPosts ?></p>
                    <?php endif;
                else: ?>
                    <p>No posts were found. Sorry!</p>
                <?php endif; ?>
            </section><!--/section-->

            <?php get_sidebar(); ?>
        </div><!--/container-->
    </main><!--/main-->

<?php get_template_part('template-parts/section', 'awards'); ?>

<?php get_footer(); ?>