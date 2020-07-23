<?php
    // WP_Query arguments
    $args = [
	    'posts_per_page' => 10,
	    'order' => 'ASC',
	    'orderby' => 'ID',
	    'post_type' => ['testimonials'],
	    'post_status' => ['publish'],
    ];

    // The Query
    $testimonials = new WP_Query($args);
    $post_count = $args['posts_per_page'];
    $lindex = 0;
?>

<div id="testimonials-row" class="row">
    <div class="container">
        <div class="col-sm-12">
            <p class="testimonial-header">See what our customers have to say:</p>
        </div>
        <div class="col-sm-12">
            <?php if ($testimonials->have_posts()): ?>
            <section id="testimonials" class="row">
                <div class="container">
                    <div id="carousel-testimonials" class="carousel slide" data-ride="carousel" data-interval="7000"
                         data-pause="hover">
                        <div class="carousel-inner" role="listbox">
					        <?php while ($testimonials->have_posts()): $testimonials->the_post(); ?>
						        <?php $testimonial = get_post_meta(get_the_ID(), 'testimonial_data', true); ?>
                                <div class="item<?= $lindex == 0 ? ' active' : ''; ?>" role="listbox">
                                    <p>
								        <?php if (!empty($testimonial['link'])): ?>
                                        <a href="<?= $testimonial['link']; ?>" target="_blank">
									        <?php endif; ?>
									        <?= get_the_content(); ?>
									        <?php if (!empty($testimonial['link'])): ?>
                                        </a>
							        <?php endif; ?>
                                    </p>
                                    <p class="testimonial-author">
								        <?php if (!empty($testimonial['link'])): ?>
                                        <a href="<?= $testimonial['link']; ?>" target="_blank">
									        <?php endif; ?>
									        <?php if (!empty($testimonial['author_description'])): ?>

                                                <strong>–<?= get_the_title(); ?>
                                                    ,</strong> <?= $testimonial['author_description']; ?>

									        <?php else: ?>

                                                <strong>–<?= get_the_title(); ?></strong>

									        <?php endif; ?>
									        <?php if (!empty($testimonial['link'])): ?>
                                        </a>
							        <?php endif; ?>
                                    </p>
                                </div>
						        <?php $lindex++; endwhile; ?>
                        </div>

                        <!-- Indicators -->
                        <ol class="carousel-indicators">
					        <?php for ($i = 0; $i < $post_count; $i++): ?>
                                <li data-target="#carousel-testimonials" data-slide-to="<?= $i; ?>"
                                    class="<?= $i == 0 ? 'active' : ''; ?>"></li>
					        <?php endfor; ?>
                        </ol>
                    </div>
                </div><!--/container-->
            </section>
	        <?php endif;
	        // Restore original Post Data
	        wp_reset_postdata();
	        ?>
        </div>
    </div>
</div>