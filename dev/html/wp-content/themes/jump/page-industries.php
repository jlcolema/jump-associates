<?php get_header(); ?>

	<div class="hero">

		<div class="wrap">

			<?php

				// Hero Sizes

				$attachment_id = get_field('industries_hero_image', $item->ID);

				$medium = "hero_medium";

				// Hero

				$hero_medium = wp_get_attachment_image_src( $attachment_id, $medium );

			?>

			<img src="<?php echo $hero_medium[0]; ?>" alt="<?php the_field('industries_hero_headline'); ?>" />

			<div class="overlay">

				<h1><?php the_field('industries_hero_headline'); ?></h1>

				<?php the_field('industries_hero_description'); ?>

			</div>

		</div>

	</div>

	<div class="industries">

		<div class="wrap">

			<div class="industry-listing">

				<h2>Industries</h2>

				<div class="listing">

					<ul>

						<?php

							/* Industries Listing */

						?>

						<?php

							$args = array(

								'numberposts' 	=> -1,
								'post_type'		=> 'industry',
								'orderby'		=> 'menu_order',
								'post_status'	=> 'publish',
								'order'			=> 'ASC'

							);

							$items = get_posts($args);

						?>

						<?php foreach($items as $item): ?>

						<?php

							// Thumbnail Sizes

							$attachment_id = get_field('industry_thumbnail', $item->ID);

							$full = "full";

							// Thumbnail

							$industry_thumbnail_full = wp_get_attachment_image_src( $attachment_id, $full );

							// Topic Areas

							$topic_areas = get_field('industry_topic_areas', $item->ID);

							$topic_area_title = get_sub_field('topic_area_title', $item->ID);

						?>

							<li>

								<a href="<?php echo get_permalink($item->ID); ?>">

									<div class="thumbnail">

										<img src="<?php echo $industry_thumbnail_full[0]; ?>" alt="<?php echo $item->post_title; ?>" />

									</div>

									<h3><?php echo $item->post_title; ?></h3>

									<?php if($topic_areas) {

										echo '<ol class="sub-industries">';

											foreach($topic_areas as $topic_area) {

												echo '<li>' . $topic_area['topic_area_title'] . '</li>';

											}

										echo '</ol>';

									} ?>

								</a>

							</li>

						<?php endforeach; ?>

						<li class="gap"></li>

					</ul>

				</div>

			</div>

			<!-- Contact -->

			<div class="secondary">

				<div class="speak-with">

					<h3>Contact</h3>

					<div class="inner-content">

						<a href="#">

							<p>Speak with Jump about a project you&rsquo;re considering.</p>

						</a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<?php

		$post_object = get_field('industries_testimonial');

		if( $post_object ):

		// override $post

		$post = $post_object;

		setup_postdata( $post );

	?>

		<div class="testimonial">

			<div class="wrap">

				<blockquote>

					<?php the_field('testimonial_quote'); ?>

					<footer>

						<b class="name"><?php the_title(); ?></b>

						<?php the_field('testimonial_title'); ?>, <?php the_field('testimonial_company'); ?>

					</footer>

				</blockquote>

			</div>

		</div>

		<?php wp_reset_postdata(); ?>

	<?php endif; ?>

<?php get_footer(); ?>