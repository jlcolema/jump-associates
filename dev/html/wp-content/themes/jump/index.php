<?php get_header(); ?>

	<div class="hero">

		<div class="wrap">

			<?php

				// Hero Sizes

				$attachment_id = get_field('insights_hero_image', 14);

				$medium = "hero_medium";

				// Hero

				$hero_medium = wp_get_attachment_image_src( $attachment_id, $medium );

			?>

			<img src="<?php echo $hero_medium[0]; ?>" alt="<?php the_field('insights_hero_headline'); ?>" />

			<div class="overlay">

				<h1><?php the_field('insights_hero_headline', 14); ?></h1>

				<?php the_field('insights_hero_description', 14); ?>

			</div>

		</div>

	</div>

	<div class="blog-landing">

		<div class="wrap">

			<div class="articles">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article class="hentry">

						<div class="thumbnail">

							<img src="http://placeimg.com/800/400/any" alt="Description of image." />

						</div>

						<div class="inner-wrap">

							<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

							<footer class="meta">

								<span class="byline author vcard">

									<i>by</i> <span class="fn"><?php the_author() ?></span>

								</span>

							</footer>

							<div class="share">

								<ul>

									<li class="email">

										<a href="#">Email</a>

									</li>

									<li class="linkedin">

										<a href="#">LinkedIn</a>

									</li>

									<li class="twitter">

										<a href="#">Twitter</a>

									</li>

								</ul>

							</div>

							<div class="excerpt">

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>

							</div>

							<div class="more">

								<a href="<?php the_permalink() ?>">

									Read Post <span class="arrow">&raquo;</span>

								</a>

							</div>

						</div>

					</article>

				<?php endwhile; ?>

				<?php post_navigation(); ?>

				<?php else : ?>

					<h2><?php _e('Nothing Found','bloom'); ?></h2>

				<?php endif; ?>

			</div>

			<div class="secondary">

				<div class="category-listing">

					<h3>Filter Posts</h3>

					<div class="inner-wrap">

						<ul>

							<?php

								$args = array(

									'show_option_all'		=> '',
									'orderby'				=> 'name',
									'order'					=> 'ASC',
									'style'					=> 'list',
									'show_count'			=> 0,
									'hide_empty'			=> 1,
									'use_desc_for_title'	=> 1,
									'child_of'				=> 0,
									'feed'					=> '',
									'feed_type'				=> '',
									'feed_image'			=> '',
									'exclude'				=> '',
									'exclude_tree'			=> '',
									'include'				=> '',
									'hierarchical'			=> 1,
									'title_li'				=> __( '' ),
									'show_option_none'		=> __( '' ),
									'number'				=> null,
									'echo'					=> 1,
									'depth'					=> 0,
									'current_category'		=> 0,
									'pad_counts'			=> 0,
									'taxonomy'				=> 'category',
									'walker'				=> null

								);

							?>

							<?php wp_list_categories( $args ); ?>

						</ul>

					</div>

				</div>

				<!-- Sort Posts -->

				<div class="sort-posts">

					<h3>Sort Posts</h3>

					<div class="inner-wrap">

						<ul>

							<li>

								<a href="#">Most Viewed</a>

							</li>

							<li>

								<a href="#">Most Recent</a>

							</li>

							<li>

								<a href="#">Most Commented</a>

							</li>

						</ul>

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

<?php get_footer(); ?>
