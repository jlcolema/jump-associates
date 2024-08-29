<?php get_header(); ?>

	<div class="hero">

		<div class="wrap">

			<?php

				// Hero Sizes

				$attachment_id = get_field('services_hero_image', $item->ID);

				$medium = "hero_medium";

				// Hero

				$hero_medium = wp_get_attachment_image_src( $attachment_id, $medium );

			?>

			<img src="<?php echo $hero_medium[0]; ?>" alt="<?php the_field('services_hero_headline'); ?>" />

			<div class="overlay">

				<h1><?php the_field('services_hero_headline'); ?></h1>

				<?php the_field('services_hero_description'); ?>

			</div>

		</div>

	</div>

	<div class="services">

		<div class="wrap">

			<div class="services-listing">

				<div class="tabs">

					<ul>

						<li class="active">

							<a href="#">Overview</a>

						</li>

						<li>

							<a href="#">Who are we?</a>

						</li>

						<li>

							<a href="#">What&rsquo;s going on?</a>

						</li>

						<li>

							<a href="#">Where should we play?</a>

						</li>

						<li>

							<a href="#">How do we win?</a>

						</li>

						<li>

							<a href="#">What should we do?</a>

						</li>

					</ul>

				</div>

				<div class="services-content">

					<div class="panels">

						<div class="panel active">

							<div class="overview">

								<ul>

									<li>

										<div class="thumbnail">

											<img src="http://placeimg.com/260/200/any" alt="Description of image." />

										</div>

										<h2>Strategic Intent</h2>

										<div class="summary">

											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.</p>

										</div>

									</li>

									<li>

										<div class="thumbnail">

											<img src="http://placeimg.com/260/200/any" alt="Description of image." />

										</div>

										<h2>Trends &amp; Futures</h2>

										<div class="summary">

											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.</p>

										</div>

									</li>

									<li>

										<div class="thumbnail">

											<img src="http://placeimg.com/260/200/any" alt="Description of image." />

										</div>

										<h2>Opportunity Spaces</h2>

										<div class="summary">

											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.</p>

										</div>

									</li>

									<li>

										<div class="thumbnail">

											<img src="http://placeimg.com/260/200/any" alt="Description of image." />

										</div>

										<h2>Offerings &amp; Messages</h2>

										<div class="summary">

											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.</p>

										</div>

									</li>

									<li>

										<div class="thumbnail">

											<img src="http://placeimg.com/260/200/any" alt="Description of image." />

										</div>

										<h2>Pilots &amp; Platforms</h2>

										<div class="summary">

											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor.</p>

										</div>

									</li>

								</ul>

							</div>

						</div>

						<div class="panel">

							<div class="service">

								<h2>Strategic Intent</h2>

								<div class="scenario">

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>

								</div>

								<div class="inner-wrap">

									<div class="to-answer">

										<h3>To answer&hellip;</h3>

										<ul>

											<li>What factors and trends in other industries should I be worried about?</li>

											<li>How can we apply and translate these trends for our business?</li>

											<li>How can we prepare for all the different ways the industry could pan out?</li>

										</ul>

									</div>

									<div class="focus-on">

										<h3>Focus on&hellip;</h3>

										<div class="focus-content">

											<dl>

												<dt>Purpose Definition</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Mission &amp; Values</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Growth Mandate</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Assets &amp; Capabilities</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Cultural DNA</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

											</dl>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="panel">

							<div class="service">

								<h2>Trends &amp; Futures</h2>

								<div class="scenario">

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>

								</div>

								<div class="inner-wrap">

									<div class="to-answer">

										<h3>To answer&hellip;</h3>

										<ul>

											<li>What factors and trends in other industries should I be worried about?</li>

											<li>How can we apply and translate these trends for our business?</li>

											<li>How can we prepare for all the different ways the industry could pan out?</li>

										</ul>

									</div>

									<div class="focus-on">

										<h3>Focus on&hellip;</h3>

										<div class="focus-content">

											<dl>

												<dt>Purpose Definition</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Mission &amp; Values</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Growth Mandate</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Assets &amp; Capabilities</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Cultural DNA</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

											</dl>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="panel">

							<div class="service">

								<h2>Opportunity Spaces</h2>

								<div class="scenario">

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>

								</div>

								<div class="inner-wrap">

									<div class="to-answer">

										<h3>To answer&hellip;</h3>

										<ul>

											<li>What factors and trends in other industries should I be worried about?</li>

											<li>How can we apply and translate these trends for our business?</li>

											<li>How can we prepare for all the different ways the industry could pan out?</li>

										</ul>

									</div>

									<div class="focus-on">

										<h3>Focus on&hellip;</h3>

										<div class="focus-content">

											<dl>

												<dt>Purpose Definition</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Mission &amp; Values</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Growth Mandate</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Assets &amp; Capabilities</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Cultural DNA</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

											</dl>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="panel">

							<div class="service">

								<h2>Offerings &amp; Messages</h2>

								<div class="scenario">

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>

								</div>

								<div class="inner-wrap">

									<div class="to-answer">

										<h3>To answer&hellip;</h3>

										<ul>

											<li>What factors and trends in other industries should I be worried about?</li>

											<li>How can we apply and translate these trends for our business?</li>

											<li>How can we prepare for all the different ways the industry could pan out?</li>

										</ul>

									</div>

									<div class="focus-on">

										<h3>Focus on&hellip;</h3>

										<div class="focus-content">

											<dl>

												<dt>Purpose Definition</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Mission &amp; Values</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Growth Mandate</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Assets &amp; Capabilities</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Cultural DNA</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

											</dl>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="panel">

							<div class="service">

								<h2>Pilots &amp; Platforms</h2>

								<div class="scenario">

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>

								</div>

								<div class="inner-wrap">

									<div class="to-answer">

										<h3>To answer&hellip;</h3>

										<ul>

											<li>What factors and trends in other industries should I be worried about?</li>

											<li>How can we apply and translate these trends for our business?</li>

											<li>How can we prepare for all the different ways the industry could pan out?</li>

										</ul>

									</div>

									<div class="focus-on">

										<h3>Focus on&hellip;</h3>

										<div class="focus-content">

											<dl>

												<dt>Purpose Definition</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Mission &amp; Values</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Growth Mandate</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Assets &amp; Capabilities</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

												<dt>Cultural DNA</dt>

												<dd>

													<img src="http://placeimg.com/400/400/any" alt="Description of image." />

												</dd>

											</dl>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<?php

		$post_object = get_field('services_testimonial');

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