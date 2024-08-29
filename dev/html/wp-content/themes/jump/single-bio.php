<?php get_header(); ?>

	<div class="profile">

		<div class="wrap">

			<!-- Hero -->

			<div class="photo">

				<?php

					// Hero Sizes

					$attachment_id = get_field('bio_hero', $item->ID);

					$full = "full";

					// Hero

					$bio_hero = wp_get_attachment_image_src( $attachment_id, $full );

				?>

				<img src="<?php echo $bio_hero[0]; ?>" alt="<?php the_title(); ?>" />

				<h1><?php the_title(); ?></h1>

				<h2><?php the_field('bio_title'); ?></h2>

				<?php if (get_field('bio_email') || get_field('bio_linkedin') || get_field('bio_twitter')): ?>

					<div class="connect">

						<ul>

							<?php if(get_field('bio_email')): ?>

								<li class="email">

									<a href="mailto:<?php the_field('bio_email'); ?>" rel="external">Email</a>

								</li>

							<?php endif; ?>

							<?php if(get_field('bio_linkedin')): ?>

								<li class="linkedin">

									<a href="<?php the_field('bio_linkedin'); ?>" rel="external">LinkedIn</a>

								</li>

							<?php endif; ?>

							<?php if(get_field('bio_twitter')): ?>

								<li class="twitter">

									<a href="https://twitter.com/<?php the_field('bio_twitter'); ?>" rel="external">Twitter</a>

								</li>

							<?php endif; ?>

						</ul>

					</div>

				<?php endif; ?>

			</div>

			<div class="bio">

				<div class="content">

					<?php the_field('bio_content'); ?>

				</div>

				<div class="related-articles">

					<?php

						$title = get_the_title();
						$title_array = explode(' ', $title);
						$first_name = $title_array[0];

					?>

					<h3>More From <?php echo $first_name; ?></h3>

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

						<article class="summary">

							<a href="#">

								<div class="thumbnail">

									<img src="http://placeimg.com/800/400/any" alt="Description of image." />

								</div>

								<h1>The Key to Healthcare Innovation is Empowering Nurses</h1>

							</a>

						</article>

						<article class="summary">

							<a href="#">

								<div class="thumbnail">

									<img src="http://placeimg.com/800/400/any" alt="Description of image." />

								</div>

								<h1>Geographic Expansion Isn&rsquo;t About Cutting and Pasting</h1>

							</a>

						</article>

					</div>

				</div>

			</div>

		</div>

	</div>

<?php get_footer(); ?>