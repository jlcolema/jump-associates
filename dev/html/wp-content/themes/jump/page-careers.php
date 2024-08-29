<?php get_header(); ?>

	<div class="hero">

		<div class="wrap">

			<?php

				// Hero Sizes

				$attachment_id = get_field('careers_hero_image', $item->ID);

				$medium = "hero_medium";

				// Hero

				$hero_medium = wp_get_attachment_image_src( $attachment_id, $medium );

			?>

			<img src="<?php echo $hero_medium[0]; ?>" alt="<?php the_field('careers_hero_headline'); ?>" />

			<div class="overlay">

				<h1><?php the_field('careers_hero_headline'); ?></h1>

				<?php the_field('careers_hero_description'); ?>

			</div>

		</div>

	</div>

	<div class="careers-overview">

		<div class="wrap">

			<div class="overview-wrap">

				<div class="photo">

					<img src="http://placeimg.com/480/480/any" alt="Description of image." />

				</div>

				<div class="inner-wrap">

					<h2>It&rsquo;s not just your job. It&rsquo;s your passion.</h2>

					<p>As hybrid thinkers, each associate&rsquo;s role and responsibilities depend on their passions and initiative as well as the level of experience and education they bring. As such, we don&rsquo;t like to hire based on specific disciplines or roles, but rather on the overall contribution a person can bring to our team. We work in a highly collaborative team environment that consciously pulls together knowledge from different disciplines. The ability to collaborate, with each other and with our clients, across all levels of an organization is essential to everything we do at Jump. What makes upa successfull collaborator? A love of learning, dedication to personal growth, and drive to transform businesses (and maybe the world) in the process.</p>

					<div class="more">

						<a href="#" rel="external">

							Read More <span class="arrow">&raquo;</span>

						</a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="career-options">

		<div class="wrap">

			<div class="career-options-wrap">

				<div class="tabs">

					<ul>

						<?php

							/* Careers */

						?>

						<?php

							$args = array(

								'numberposts' 	=> -1,
								'post_type'		=> 'career',
								'orderby'		=> 'menu_order',
								'post_status'	=> 'publish',
								'order'			=> 'ASC'

							);

							$items = get_posts($args);

						?>

						<?php foreach($items as $item): ?>

						<?php

							// Title

							$faq_answer = get_field('faq_answer', $item->ID);

						?>

							<li>

								<a href="#tab-<?php echo $item->ID; ?>"><?php echo $item->post_title; ?></a>

							</li>

						<?php endforeach; ?>

						<li>

							<a href="#resume">Upload a Resume</a>

						</li>

						<li>

							<a href="#faqs">FAQs</a>

						</li>

					</ul>

				</div>

				<div class="panels">

					<?php

						/* Careers */

					?>

					<?php

						$args = array(

							'numberposts' 	=> -1,
							'post_type'		=> 'career',
							'orderby'		=> 'menu_order',
							'post_status'	=> 'publish',
							'order'			=> 'ASC'

						);

						$items = get_posts($args);

					?>

					<?php foreach($items as $item): ?>

					<?php

						// Description

						$career_description = get_field('career_description', $item->ID);

						// URL

						$career_url = get_field('career_url', $item->ID);

					?>

						<div id="tab-<?php echo $item->ID; ?>" class="panel">

							<div class="career">

								<h3><?php echo $item->post_title; ?></h3>

								<?php echo $career_description; ?>

								<div class="more">

									<a href="<?php echo $career_url; ?>" rel="external">

										Read More <span class="arrow">&raquo;</span>

									</a>

								</div>

							</div>

						</div>

					<?php endforeach; ?>

					<div id="resume" class="panel">

						<div class="resume-upload">

							<h3>Upload a Resume</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>

						</div>

					</div>

					<div id="faqs" class="panel">

						<div class="faqs">

							<h3>FAQs</h3>

							<ol>

								<?php

									/* FAQs */

								?>

								<?php

									$args = array(

										'numberposts' 	=> -1,
										'post_type'		=> 'faq',
										'orderby'		=> 'menu_order',
										'post_status'	=> 'publish',
										'order'			=> 'ASC'

									);

									$items = get_posts($args);

								?>

								<?php foreach($items as $item): ?>

								<?php

									// Question

									$faq_question = get_field('faq_question', $item->ID);

									// Answer

									$faq_answer = get_field('faq_answer', $item->ID);

								?>

									<li>

										<h4 class="question"><?php echo $faq_question; ?></h4>

										<div class="answer">

											<?php echo $faq_answer; ?>

										</div>

									</li>

								<?php endforeach; ?>

							</ol>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<?php

		$post_object = get_field('careers_testimonial');

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