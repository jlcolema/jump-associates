<?php get_header(); ?>

	<div class="hero">

		<div class="wrap">

			<?php

				// Hero Sizes

				$attachment_id = get_field('contact_hero_image', $item->ID);

				$medium = "hero_medium";

				// Hero

				$hero_medium = wp_get_attachment_image_src( $attachment_id, $medium );

			?>

			<img src="<?php echo $hero_medium[0]; ?>" alt="<?php the_field('contact_hero_headline'); ?>" />

			<div class="overlay">

				<h1><?php the_field('contact_hero_headline'); ?></h1>

				<?php the_field('contact_hero_description'); ?>

			</div>

		</div>

	</div>

	<div class="contact-information">

		<div class="wrap">

			<div class="inquiries">

				<h2>Inquiries</h2>

				<div class="vcard business inquiry">

					<div class="thumbnail">

						<img src="http://placeimg.com/600/200/any" alt="Description of image." />

					</div>

					<div class="inner-wrap">

						<?php

							$post_object = get_field('business_inquiries_contact', 'option');

							if( $post_object ):

							// override $post

							$post = $post_object;
							setup_postdata( $post );

						?>

							<p>If you&rsquo;d like to speak with a member of our team about a project you&rsquo;re considering, please email <?php the_title(); ?> or call <?php the_field('bio_phone'); ?>.</p>

					    	<?php wp_reset_postdata(); ?>

						<?php endif; ?>

						<div class="more">

							<a href="#">

								Business Inquiries <span class="arrow">&raquo;</span>

							</a>

						</div>

					</div>

				</div>

				<div class="vcard press inquiry">

					<div class="thumbnail">

						<img src="http://placeimg.com/600/200/any" alt="Description of image." />

					</div>

					<div class="inner-wrap">

						<?php

							$post_object = get_field('press_inquiries_contact', 'option');

							if( $post_object ):

							// override $post

							$post = $post_object;
							setup_postdata( $post );

						?>

							<p>If you&rsquo;d like to speak with someone at Jump about a story or event you&rsquo;re working on, please email <?php the_title(); ?> or call <?php the_field('bio_phone'); ?>.</p>

					    	<?php wp_reset_postdata(); ?>

						<?php endif; ?>

						<div class="more">

							<a href="#">

								Press Inquiries <span class="arrow">&raquo;</span>

							</a>

						</div>

					</div>

				</div>

			</div>

			<div class="locations">

				<h2>Location</h2>

				<div class="location">

					<div class="thumbnail">

						<img src="http://placeimg.com/600/200/any" alt="Description of image." />

					</div>

					<div class="inner-wrap">

						<div class="vcard">

							<div class="fn n org"><?php bloginfo( 'name' ); ?></div>

							<div class="adr">

								<?php if (get_field('contact_street', 'option')): ?>

									<div class="street-address"><?php the_field('contact_street', 'option'); ?></div>

								<?php endif; ?>

								<?php if (get_field('contact_suite', 'option')): ?>

									<div class="suite">Suite <?php the_field('contact_suite', 'option'); ?></div>

								<?php endif; ?>

								<?php if (get_field('contact_city', 'option')): ?>

									<span class="locality"><?php the_field('contact_city', 'option'); ?></span>,

								<?php endif; ?>

								<?php if (get_field('contact_state', 'option')): ?>

									<span class="region"><?php the_field('contact_state', 'option'); ?></span>

								<?php endif; ?>

								<?php if (get_field('contact_zipcode', 'option')): ?>

									<span class="postal-code"><?php the_field('contact_zipcode', 'option'); ?></span>

								<?php endif; ?>

							</div>

							<?php if (get_field('contact_phone', 'option')): ?>

								<div class="tel">Phone: <?php the_field('contact_phone', 'option'); ?></div>

							<?php endif; ?>

							<?php if (get_field('contact_fax', 'option')): ?>

								<div class="fax">Fax: <?php the_field('contact_fax', 'option'); ?></div>

							<?php endif; ?>

						</div>

						<?php if (get_field('contact_directions', 'option')): ?>

							<div class="more">

								<a href="<?php the_field('contact_directions', 'option'); ?>" rel="external">

									Directions <span class="arrow">&raquo;</span>

								</a>

							</div>

						<?php endif; ?>

					</div>

				</div>

			</div>

			<div class="social">

				<h2>Connect</h2>

				<div class="social-wrap">

					<div class="thumbnail">

						<img src="http://placeimg.com/600/200/any" alt="Description of image." />

					</div>

					<div class="connect">

						<ul>

							<?php if (get_field('social_twitter', 'option')): ?>

								<li class="twitter">

									<a href="<?php the_field('social_twitter', 'option'); ?>" rel="external">Twitter</a>

								</li>

							<?php endif; ?>

							<?php if (get_field('social_linkedin', 'option')): ?>

								<li class="linkedin">

									<a href="<?php the_field('social_linkedin', 'option'); ?>" rel="external">LinkedIn</a>

								</li>

							<?php endif; ?>

							<?php if (get_field('social_facebook', 'option')): ?>

								<li class="facebook">

									<a href="<?php the_field('social_facebook', 'option'); ?>" rel="external">Facebook</a>

								</li>

							<?php endif; ?>

							<?php if (get_field('social_medium', 'option')): ?>

								<li class="medium">

									<a href="<?php the_field('social_medium', 'option'); ?>" rel="external">Medium</a>

								</li>

							<?php endif; ?>

						</ul>

					</div>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>