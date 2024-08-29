<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article id="article" class="">

		<div class="article-hero">

			<div class="wrap">

				<?php

					// Hero Sizes

					$attachment_id = get_field('post_hero', $item->ID);

					$full = "full";

					// Hero

					$post_hero = wp_get_attachment_image_src( $attachment_id, $full );

				?>

				<img src="<?php echo $post_hero[0]; ?>" alt="<?php the_title(); ?>" />

				<div class="overlay">

					<div class="inner-overlay">

						<h1><?php the_title(); ?></h1>

					</div>

				</div>

			</div>

		</div>

		<div class="share-options">

			<div class="wrap">

				<ul>

					<li class="share">

						<a href="#">Share</a>

					</li>

					<li class="comment">

						<a href="#comments">Comment</a>

					</li>

				</ul>

			</div>

		</div>

		<div class="content-wrap">

			<div class="wrap">

				<div class="content">

					<footer class="meta">

						<div class="byline author vcard">

							<p>This post was written by <a href="#" class="fn">Jane Appleseed</a>, a strategist here at Jump. You can find him on Twitter <a href="#" rel="external">@janeappleseed</a>, or get in touch with him by commenting on this post.</p>

						</div>

						<time datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>

						<div class="categories">

							Categories:

							<?php

								$categories = get_the_category();

								$separator = ', ';

								$output = '';

								if($categories){

									foreach($categories as $category) {

										$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;

										}

										echo trim($output, $separator);

									}

								?>

						</div>

					</footer>

					<?php the_field('post_content'); ?>

					<footer class="postmeta">

						<div class="credits">

							<span class="label">Photo credit:</span> <?php the_field('post_hero_credit'); ?>

						</div>

					</footer>

					<div id="comments">

						<?php comments_template(); ?>

					</div>

				</div>

				<div class="secondary">

					<!-- Subscribe -->

					<div class="subscribe-to">

						<h3>Subscribe</h3>

						<div class="inner-content">

							<a href="#">

								<p>Sign up for our latest thinking on how to grow your business.</p>

							</a>

						</div>

					</div>

					<!-- Related Thinking -->

					<div class="related-thinking">

						<h3>Related Thinking</h3>

						<div class="articles">

							<?php $orig_post = $post;

								global $post;

								$categories = get_the_category($post->ID);

								if ($categories) {

									$category_ids = array();

									foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

									$args=array(

										'posts_per_page'	=> 4, // Number of related posts that will be displayed.
										'post_status'		=> 'publish',
										'category__in'		=> $category_ids,
										'post__not_in'		=> array($post->ID),
										'caller_get_posts'	=> 1,
										// 'orderby'			=> 'menu_order', // Randomize the posts
										'order'				=> 'DESC'

									);

									$my_query = new wp_query( $args );

									if( $my_query->have_posts() ) {

										while( $my_query->have_posts() ) {

											$my_query->the_post(); ?>


											<article class="summary">

												<a href="<?php the_permalink()?>">

													<div class="thumbnail">

														<img src="http://placeimg.com/800/500/any" alt="Description of image." />

													</div>

													<h1><?php the_title(); ?></h1>

												</a>

											</article>

										<? }

									}

								}

								$post = $orig_post;

							wp_reset_query(); ?>

							<div class="more">

								<a href="/insights/">

									See more posts <span class="arrow">&raquo;</span>

								</a>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>