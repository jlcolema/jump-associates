<?php get_header(); ?>

	<?php if( have_rows('home_slideshow') ): ?>

		<div id="slideshow">

			<div class="wrap">

				<div class="flexslider">

					<ul class="slides">

						<?php while( have_rows('home_slideshow') ): the_row();

							// Variables

							$home_slide_headline = get_sub_field('home_slide_headline');
							$home_slide_link = get_sub_field('home_slide_link');
							$home_slide_button_label = get_sub_field('home_slide_button_label');
							$home_slide_image = get_sub_field('home_slide_image');

						?>

							<li>

								<img src="<?php echo $home_slide_image; ?>" alt="<?php echo $home_slide_headline; ?>" />

								<div class="overlay">

									<div class="inner-overlay">

										<h1><?php echo $home_slide_headline; ?></h1>

										<?php if( $home_slide_link ): ?>

											<div class="more">

												<a href="<?php echo $home_slide_link; ?>">

													<?php if( $home_slide_button_label ): ?>

														<?php echo $home_slide_button_label; ?> <span class="arrow">&raquo;</span>

													<?php else: ?>

														Learn more <span class="arrow">&raquo;</span>

													<?php endif; ?>

												</a>

											</div>

										<?php endif; ?>

									</div>

								</div>

							</li>

						<?php endwhile; ?>

					</ul>

				</div>

			</div>

		</div>

	<?php endif; ?>

	<!-- Mission -->

	<div class="call-to-action">

		<div class="wrap">

			<?php if( get_field('home_mission_statement_image') ): ?>

				<div class="photo">

					<?php

						// Hero Sizes

						$attachment_id = get_field('home_mission_statement_image', $item->ID);

						$medium = "mission_statement_image_medium";

						// Hero

						$mission_statement_image_medium = wp_get_attachment_image_src( $attachment_id, $medium );

					?>

					<img src="<?php echo $mission_statement_image_medium[0]; ?>" alt="<?php the_field('home_mission_statement_headline'); ?>" />

				</div>

			<?php endif; ?>

			<div class="overlay">

				<?php if( get_field('home_mission_statement_headline') ): ?>

					<h2><?php the_field('home_mission_statement_headline'); ?></h2>

				<?php endif; ?>

				<?php the_field('home_mission_statement_description'); ?>

			</div>

		</div>

	</div>

	<div class="recent-insights-and-news">

		<div class="wrap">

			<!-- Insights -->

			<div class="insights">

				<h3>Insights</h3>

				<div class="articles">

					<?php

						$args = array(

							'numberposts'	=> 6,
							'post_status'	=> "publish",
							'post_type'	=> "post",
							'orderby'		=> "post_date"

						);

						$postslist = get_posts( $args );

						foreach ($postslist as $post) : setup_postdata($post); ?>

						<article class="summary">

							<a href="<?php the_permalink() ?>">

								<div class="thumbnail">

									<img src="http://placeimg.com/800/400/any" alt="<?php the_title(); ?>" />

								</div>

								<h1><?php the_title(); ?></h1>

							</a>

						</article>

					<?php endforeach; ?>

				</div>

				<div class="more">

					<a href="/insights/">

						See more posts <span class="arrow">&raquo;</span>

					</a>

				</div>

			</div>

			<!-- News and Events -->

			<div class="news-and-events">

				<h3>News &amp; Events</h3>

				<div class="articles">

					<article class="summary">

						<a href="#">

							<h1>Transforming Government through Digital Strategy</h1>

							<div class="category">Jump Talk</div>

							<footer>

								<time datetime="">Feb. 24</time>

							</footer>

						</a>

					</article>

					<article class="summary">

						<a href="#">

							<h1>Business Romantic Book Launch with Tim Leberecht</h1>

							<div class="category">Jump Talk</div>

							<footer>

								<time datetime="">Jan. 12</time>

							</footer>

						</a>

					</article>

					<article class="summary">

						<a href="#">

							<h1>Come Meet Jump for a Guided Tour of CES</h1>

							<div class="category">Conference</div>

							<footer>

								<time datetime="">Jan. 29-31</time>

							</footer>

						</a>

					</article>

					<article class="summary">

						<a href="#">

							<h1>Jump Launches New Website</h1>

							<div class="category">Press Release</div>

							<footer>

								<time datetime="">Jan. 8</time>

							</footer>

						</a>

					</article>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>