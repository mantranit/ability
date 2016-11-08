<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dickinsons
 * @since Dickinsons 1.0.0
 */
?>

	<!--footer class="site-footer">

		<section class="socials-network">
			<div class="container">
				<?= get_option('connect_with_us_' . ICL_LANGUAGE_CODE) ?>
				<?php
				if ( has_nav_menu( 'footer_horizontal' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer_horizontal',
						'menu_class' => 'nav',
						'container' => 'ul'
					) );
				} ?>
			</div>
		</section>

		<section class="subscribe">
			<div class="container">
				<div class="subscribe-form">
					<?= get_option('subscribe_' . ICL_LANGUAGE_CODE) ?>
				</div>
			</div>
		</section>

		<section class="footer--info">
			<div class="container">
				<div class="three-column">
					<div class="information">
						<h3><?= get_option('information_' . ICL_LANGUAGE_CODE) ?></h3>
						<?php
						if ( has_nav_menu( 'footer' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'footer',
								'menu_class' => 'nav',
								'container' => 'ul'
							) );
						} ?>
					</div>
					<div class="contact">
						<?= get_option('contact_' . ICL_LANGUAGE_CODE) ?>
					</div>

					<div class="latest-news">
						<?php echo dickinsons_recent_post(); ?>
						<a href="<?= get_option('all_articles_link_' . ICL_LANGUAGE_CODE) ?>" class="button button--green">
							<?= get_option('all_articles_' . ICL_LANGUAGE_CODE) ?>
						</a>
					</div>
				</div>


				<div class="copyright">
					<a href="#body" class="back-to-top anchor"><i class="fa fa-angle-up"></i></a>
					<?= get_option('copyright_' . ICL_LANGUAGE_CODE) ?>
				</div>
			</div>
		</section>
	</footer-->

		<footer class="site-footer">

			<section class="personal-network">
				<div class="container clearfix">
					<div class="personal-column for-students">
						<h3>FOR STUDENTS</h3>
						<ul class="nav">
							<li class="menu-item">
								<a href="#">Course Finder</a>
							</li>
							<li class="menu-item">
								<a href="#">Free Cambridge Seminars</a>
							</li>
							<li class="menu-item">
								<a href="#">Activities Calendar</a>
							</li>
							<li class="menu-item">
								<a href="#">Find an Agent</a>
							</li>
							<li class="menu-item">
								<a href="#">Job Club</a>
							</li>
							<li class="menu-item">
								<a href="#">Free English Test</a>
							</li>
							<li class="menu-item">
								<a href="#">Course Start Dates</a>
							</li>
							<li class="menu-item">
								<a href="#">Student Blog</a>
							</li>
						</ul>
					</div>
					<div class="personal-column for-agents">
						<h3>FOR AGENTS</h3>
						<ul class="nav">
							<li class="menu-item">
								<a href="#">Brochure</a>
							</li>
							<li class="menu-item"></li>
							<li class="menu-item">
								<a href="#">Enrolment Form</a>
							</li>
							<li class="menu-item"></li>
							<li class="menu-item">
								<a href="#">Book a Placement Test</a>
							</li>
							<li class="menu-item"></li>
							<li class="menu-item">
								<a href="#">Latest News</a>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="footer--info">
				<div class="information">
					<div class="container clearfix">
						<div class="contact-info">
							<h3>Sydney Campus</h3>
							<p class="email"><a href="mailto:hello@module.com">hello@module.com</a></p>
							<p class="address">Studio M, 4th Floor8 Lower
								<br>Manchester street, M1 5QF</p>
							<p class="phone"><a href="tel:+38 976 0875 9922">+38 976 0875 9922</a></p>
						</div>
						<div class="contact-info">
							<h3>Melbourne Campus</h3>
							<p class="email"><a href="mailto:hello@module.com">hello@module.com</a></p>
							<p class="address">Studio M, 4th Floor8 Lower
								<br>Manchester street, M1 5QF</p>
							<p class="phone"><a href="tel:+38 976 0875 9922">+38 976 0875 9922</a></p>
						</div>
						<div class="contact-info">
							<h3>Follow us</h3>
							<p class="networks">
								<a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
								<a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
								<a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
								<a target="_blank" href="#"><i class="fa fa-instagram"></i></a>
							</p>
							<p class="address">We’re socialized!</p>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="container clearfix">
						<a href="#body" class="back-to-top anchor">Go To Top <i class="fa fa-angle-up"></i></a>
						<p>&copy; 2016  ABILITY English. All Rights Reserved.</p>
					</div>
				</div>
			</section>
		</footer>

	</div>

</div>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "f5aa822b-dd9d-40c5-ab1d-949e4ccb9e9c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<?php wp_footer(); ?>
</body>
</html>
