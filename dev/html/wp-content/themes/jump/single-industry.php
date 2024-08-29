<?php get_header(); ?>

	<!-- Hero -->

	<div class="industry-hero">

		<div class="wrap">

			<img src="<?php the_field('industry_hero'); ?>" alt="<?php the_title(); ?>" />

			<div class="overlay">

				<div class="inner-overlay">

					<h1><?php the_title(); ?></h1>

					<?php if( have_rows('industry_topic_areas') ): ?>

						<ul>

							<?php while( have_rows('industry_topic_areas') ): the_row();

								// Variables

								$topic_area = get_sub_field('topic_area_title');

							?>

								<li><?php echo $topic_area; ?></li>

							<?php endwhile; ?>

						</ul>

					<?php endif; ?>

					<div class="overview">

						<?php the_field('industry_overview'); ?>

					</div>

					<div class="more">

						<a href="#">

							Contact Us <span class="arrow">&raquo;</span>

						</a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!-- Detail -->

	<div class="industry-detail">

		<div class="wrap">

			<?php if( have_rows('industry_typical_projects') ): ?>

				<div class="typical-projects">

					<h2>Typical Projects</h2>

					<div class="project-listing">

						<div class="tabs">

							<ul>

								<?php $count = 1; ?>

								<?php while( have_rows('industry_typical_projects') ): the_row();

									// Variables

									$project_title = get_sub_field('typical_project_title');

									// Add a class of "active" to first item

									// Notes...

								?>

									<li class="">

										<a href="#tab-<?php echo $count++; ?>"><?php echo $project_title; ?></a>

									</li>

								<?php endwhile; ?>

							</ul>

						</div>

						<div class="listings">

							<ul>

								<?php $count = 1; ?>

								<?php while( have_rows('industry_typical_projects') ): the_row();

									// Variables

									$project_title = get_sub_field('typical_project_title');
									$project_subtitle = get_sub_field('typical_project_subtitle');
									$project_image = get_sub_field('typical_project_image');
									$project_description = get_sub_field('typical_project_description');

								?>

									<li id="tab-<?php echo $count++; ?>" class="">

										<?php if( $project_image ): ?>

											<div class="photo">

												<img src="<?php echo $project_image; ?>" alt="<?php echo $project_title; ?>" />

											</div>

										<?php endif; ?>

										<div class="inner-wrap">

											<h3><?php echo $project_title; ?></h3>

											<h4><?php echo $project_subtitle; ?></h4>

											<div class="description">

												<?php echo $project_description; ?>

											</div>

											<div class="more">

												<a href="#">

													Contact Us <span class="arrow">&raquo;</span>

												</a>

											</div>

										</div>

									</li>

								<?php endwhile; ?>

							</ul>

						</div>

					</div>

				</div>

			<?php endif; ?>

			<!-- Sidebar -->

			<div class="secondary">

				<!-- Insights -->

				<div class="related-articles">

					<h3>Insights</h3>

					<div class="articles">

						<article class="summary">

							<a href="#">

								<div class="thumbnail">

									<img src="http://placeimg.com/800/400/any" alt="Description of image." />

								</div>

								<h1>Betweeen Elite Athletes and Business Leaders</h1>

							</a>

						</article>

						<article class="summary">

							<a href="#">

								<div class="thumbnail">

									<img src="http://placeimg.com/800/400/any" alt="Description of image." />

								</div>

								<h1>Wired to Care: Jump Co-founder Dev Patnaik&rsquo;s Seminal Text on Empathy and Growth</h1>

							</a>

						</article>

					</div>

				</div>

				<!-- Subscribe -->

				<div class="subscribe-to">

					<h3>Subscribe</h3>

					<div class="inner-content">

						<a href="#">

							<p>Sign up for our latest thinking on how to grow your business.</p>

						</a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<?php

		$posts = get_field('industry_relationships');

	if( $posts ): ?>

		<div class="relationships">

			<div class="wrap">

				<h3>Select Relationships</h3>

				<div class="listing">

					<ul>

						<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>

							<?php setup_postdata($post); ?>

							<li>

								<img src="<?php the_field('relationship_logo'); ?>" alt="<?php the_title(); ?>" />

							</li>

						<?php endforeach; ?>

					</ul>

				</div>

			</div>

		</div>

		<?php wp_reset_postdata(); ?>

	<?php endif; ?>

<?php get_footer(); ?>