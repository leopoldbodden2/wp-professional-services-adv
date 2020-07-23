<?php
// place id for review links
// find it here: https://developers.google.com/places/place-id
// by searching for the client name as it appears on google my business
$placeid = '';

$post_type = 'testimonials';

// WP_Query arguments to get testimonials
$args = [
	'post_type' => [$post_type],
	'post_status' => ['publish'],
	'posts_per_page' => 2,
	'order' => 'ASC',
	'orderby' => 'ID',
];

// The Query
$testimonials = new WP_Query($args);
$post_count = $testimonials->found_posts;
$lindex = 0;

$archive_link = get_post_type_archive_link($post_type);
?>
<section id="sidebar-testimonials" class="panel panel-lblue">
	<div class="panel-heading">
		<h3 class="panel-title">Testimonials</h3>
		<a href="<?= $archive_link; ?>" title="View all <?= get_bloginfo('name'); ?> Reviews" class="btn btn-default pull-right">View all Reviews</a>
		<div class="clearfix"></div>
	</div>
	<div class="panel-body">
		<?php if ($testimonials->have_posts()): while ($testimonials->have_posts()): $testimonials->the_post(); ?>

			<?php $testimonial = get_post_meta(get_the_ID(), 'testimonial_data', true); ?>
			<?= $lindex == 0 ? '' : '<hr>'; ?>
			<blockquote>
				<h4><?= get_the_title(); ?></h4>
				<p class="text-orange"><span class="sr-only">5 Stars</span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span></p>
				<?php the_excerpt(); ?>
			</blockquote>

			<?php $lindex++; endwhile; endif;
		// Restore original Post Data
		wp_reset_postdata(); ?>
	</div>
	<div class="panel-footer text-center">
		<a href="https://search.google.com/local/writereview?placeid=<?= $placeid; ?>" target="_blank" title="Leave A Review" class="btn btn-default">Leave a Review</a>
	</div>
</section>