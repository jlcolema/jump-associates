<?php get_header(); ?>

	<div class="hero">

		<div class="wrap">

			<?php

				// Hero Sizes

				$attachment_id = get_field('about_hero_image', $item->ID);

				$medium = "hero_medium";

				// Hero

				$hero_medium = wp_get_attachment_image_src( $attachment_id, $medium );

			?>

			<img src="<?php echo $hero_medium[0]; ?>" alt="<?php the_field('about_hero_headline'); ?>" />

			<div class="overlay">

				<h1><?php the_field('about_hero_headline'); ?></h1>

				<?php the_field('about_hero_description'); ?>

			</div>

		</div>

	</div>

	<div class="leadership">

		<div class="wrap">

			<h2>Leadership</h2>

			<div class="bios">

				<ul>

					<?php

						/* Leadership Listing */

					?>

					<?php

						$args = array(

							'numberposts' 	=> -1,
							'post_type'		=> 'bio',
							'orderby'		=> 'menu_order',
							'post_status'	=> 'publish',
							'order'			=> 'ASC'

						);

						$items = get_posts($args);

					?>

					<?php foreach($items as $item): ?>

					<?php

						// Thumbnail Sizes

						$attachment_id = get_field('bio_hero', $item->ID);

						$medium = "bio_hero_medium";

						// Thumbnail

						$bio_hero_medium = wp_get_attachment_image_src( $attachment_id, $medium );

						// Title

						$bio_title = get_field('bio_title', $item->ID);

					?>

						<li>

							<a href="<?php echo get_permalink($item->ID); ?>">

								<img src="<?php echo $bio_hero_medium[0]; ?>" alt="<?php echo $item->post_title; ?>" />

								<h3><?php echo $item->post_title; ?></h3>

								<?php if ( $bio_title ): ?>

									<p><?php echo $bio_title; ?></p>

								<?php endif; ?>

							</a>

						</li>

					<?php endforeach; ?>

					<li class="gap"></li>

					<li class="gap"></li>

					<li class="gap"></li>

				</ul>

			</div>

		</div>

	</div>

	<?php

		$post_object = get_field('about_testimonial');

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