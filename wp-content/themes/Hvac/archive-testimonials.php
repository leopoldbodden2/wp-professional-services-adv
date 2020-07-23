<?php get_header(); ?>

<?php
global $post;
$featured_image_url = get_the_post_thumbnail_url();
?>

    <header class="row header-secondary" <?= $featured_image_url ? 'style="background-image: url(' . $featured_image_url . ')"' : '' ?>>
        <div class="page-title">Testimonials</div>
    </header><!--/header-->

	<main class="row" role="main">
		<div class="container no-padding">
			<section id="main-content" class="col-sm-12">
				<?php if (have_posts()) :
					while (have_posts()) : the_post(); ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
						<hr>
					<?php endwhile; ?>

					<?php
					$prev_permalink = get_previous_posts_link( '<span class="fa fa-arrow-left"></span> Previous' );
					$next_permalink = get_next_posts_link( 'Next <span class="fa fa-arrow-right"></span>' );
					?>
					<ul class="pager" aria-label="Page Navigation">
						<?php if($prev_permalink): ?>
							<li class="previous">
								<?= $prev_permalink; ?>
							</li>
						<?php endif; if($next_permalink): ?>
							<li class="next">
								<?= $next_permalink; ?>
							</li>
						<?php endif; ?>
					</ul>
				<?php else: ?>
					<p>No posts were found. Sorry!</p>
				<?php endif; ?>
			</section><!--/section-->
		</div><!--/container-->
	</main><!--/main-->


<?php get_template_part('template-parts/section', 'awards'); ?>

<?php get_footer(); ?>