	</div>

	<footer id="footer" role="contentinfo">

		<div class="wrap">

			<div class="inquiries">

				<div class="vcard business inquiry">

					<h4>

						<a href="#">Business Inquiries</a>

					</h4>

					<?php

						$post_object = get_field('business_inquiries_contact', 'option');

						if( $post_object ):

						// override $post

						$post = $post_object;
						setup_postdata( $post );

					?>

						<span class="fn n given-name"><?php the_title(); ?></span>

						<div class="tel"><?php the_field('bio_phone'); ?></div>

				    	<?php wp_reset_postdata(); ?>

					<?php endif; ?>

					<div class="form">

						<!-- Add form... -->

					</div>

				</div>

				<div class="vcard press inquiry">

					<h4>

						<a href="#">Press Inquiries</a>

					</h4>

					<?php

						$post_object = get_field('press_inquiries_contact', 'option');

						if( $post_object ):

						// override $post

						$post = $post_object;
						setup_postdata( $post );

					?>

						<span class="fn n given-name"><?php the_title(); ?></span>

						<div class="tel"><?php the_field('bio_phone'); ?></div>

				    	<?php wp_reset_postdata(); ?>

					<?php endif; ?>

					<div class="form">

						<!-- Add form... -->

					</div>

				</div>

				<div class="subscribe">

					<p>

						<a href="#">Join the conversation. Subscribe.</a>

					</p>

					<div class="form">

						<!-- Add MailChimp form... -->

					</div>

				</div>

			</div>

			<div class="vcard address">

				<h4 class="fn n org"><?php bloginfo( 'name' ); ?></h4>

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

					<div class="tel"><?php the_field('contact_phone', 'option'); ?></div>

				<?php endif; ?>

			</div>

			<div class="mission">

				<?php if (get_field('mission_statement', 'option')): ?>

					<div class="statement">

						<?php the_field('mission_statement', 'option'); ?>

					</div>

				<?php endif; ?>

				<p id="copyright">Copyright 2015 Jump Associates. All rights reserved. Jump is a registered trademark of Jump Associates. All other marks reserved to their respective rights holders.</p>

			</div>

		</div>

	</footer>

	<?php wp_footer(); ?>

	<?php

		/* Plugins */

	?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/picturefill.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/flexslider.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/scroll.js"></script>

	<?php

		/* Functions */

	?>

	<script src="<?php bloginfo('template_directory'); ?>/a/js/functions.js"></script>

	<?php

		/* Analytics */

	?>

	<?php if( the_field( 'google_analytics', 'option' ) ): ?>

		<!--

		Asynchronous google analytics; this is the official snippet.

		Replace UA-XXXXXX-XX with your site's ID and domainname.com with your domain, then uncomment to enable.

		-->

		<script>

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', '<?php the_field( 'google_analytics', 'option'); ?>', 'domainname.com');

			ga('send', 'pageview');

		</script>

	<?php endif; ?>

</body>

</html>