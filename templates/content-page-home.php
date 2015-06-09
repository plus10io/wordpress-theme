<section id="intro">
<h3>The accidental Coworking Space.</h3>
</section><section class="who-what">
<div id="who-we-are" class="split">
<h2>Who are are</h2>
<?php the_field('who_we_are'); ?>

</div>
<div id="about-img" class="split the-space"></div>
</section><section class="who-what">
<div class="row">
<div id="about-img2" class="split"></div>
<div id="what-we-do" class="split">
<h2>What we do</h2>
<?php the_field('what_we_do'); ?>
</div>
</div>
</section>
<section id="pricing">
<h2>Pricing</h2>
<p>Freelancers and a pro-workers can choose from a simple menu of services and opt to pay daily, weekly, monthly or quarterly depending on their needs. We are happy to support unfunded start-ups with free desks and Wi-Fi.
</p>
<div id="weekly" class="pricing--plan">
<h3>Per Month</h3>
<h2>€120</h2>
<ul class="pricing-list">
	<li>Personal Use</li>
	<li>Unlimited project</li>
	<li>24/7 access</li>
</ul>
<!-- <a href="/contact/">Enquire now</a>
 -->
</div>
<div id="monthly" class="pricing--plan">
<h3>Per Week</h3>
<h2>€30</h2>
<ul class="pricing-list">
	<li>Personal Use</li>
	<li>Unlimited project</li>
	<li>24/7 access</li>
</ul>
<!-- <a href="/contact/">Enquire now</a>
 -->
</div>
<div id="daily" class="pricing--plan">
<h3>Per Day</h3>
<h2>€10</h2>
<ul class="pricing-list">
	<li>Personal Use</li>
	<li>Unlimited project</li>
	<li>24/7 access</li>
</ul>
<!-- <a href="/contact">Enquire now</a>
 -->
</div>
</section>
<section id="news-events">
	<h2>News & Events</h2>


		<div class='latest--blog'>
		<h3>Latest Blog Post</h3>
				<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1 ) ); ?>
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	<li>
		<?php echo get_the_post_thumbnail( $page->ID, array( 200, 200) ); ?>
		<h4><?php the_title(); ?></h4>
		<p><?php the_excerpt(); ?></p>
		<p><a class="" href="<?php the_permalink(); ?>">Read More</a></p>
	</li>
	<?php endwhile; wp_reset_query(); ?>
		</div>


		<div class="latest--event">
		<h3>Upcoming Event</h3>
					<?php $loop = new WP_Query( array( 'post_type' => 'tribe_events', 'posts_per_page' => 1 ) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<li>
			<?php echo get_the_post_thumbnail( $page->ID, array( 200, 200) ); ?>
			<h4><?php the_title(); ?></h4>
			<p><?php the_excerpt(); ?></p>
			<p><a href="<?php the_permalink(); ?>">Read More</a></p>
		</li>
		<?php endwhile; wp_reset_query(); ?>
		</div>

</section>
<section id="members">
<h2>Our Members &amp; Startups</h2>
<hr>
<p><a>Read about the members </a> or <a href="#">become a member now</a></p>

<div class="latest--member">
<h3>Our newest members</h3>
<ul class="newest-members">

<?php $loop = new WP_Query( array( 'post_type' => 'team', 'posts_per_page' => 3 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<li>
	<?php echo get_the_post_thumbnail( $page->ID, array( 100, 100) ); ?>
	<p><?php the_title(); ?></p>
</li>
<?php endwhile; wp_reset_query(); ?>

</ul>
</div>
<div class="latest--startup">

<ul class="newest-members newest-startups">
<h3>Our newest startups</h3>


<?php $loop = new WP_Query( array( 'post_type' => 'startup', 'posts_per_page' => 3 ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<li>
	<?php echo get_the_post_thumbnail( $page->ID, array( 100, 100) ); ?>
	<p><?php the_title(); ?></p>
</li>
<?php endwhile; wp_reset_query(); ?>
</ul>
</div>
</section><section id="location" class="map"><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9848.20474211186!2d-8.476445!3d51.89653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92ad116a1ce25c05!2sPlus+10!5e0!3m2!1sen!2sie!4v1431215019446" width="600" height="450" frameborder="0"></iframe></section><section id="get-in-touch">
<div class="container">
<h3>Get in touch</h3>
<div class="contact-details">


<p>

<b>Plus10 Co-working</b>

30 South Main St <br />

Cork City <br />

Ireland <br />

Phone: <a href="tel:08534343">087 3434 232</a> <br />

Email: <a href="mailto:info@plus10.io">info[at]plus10.io</a> <br />

Twitter <a href="http://twitter.com/plus10io" target="_blank">@plus10</a> <br />

Opening Times: Monday to Friday - 9:00 - 18:00 <br />

</p>

</div>
<div class="contact-form"><form accept-charset="UTF-8" action="https://formkeep.com/f/84594256dfeb" method="POST">
<h4>Drop us a message</h4>
<?php echo do_shortcode( '[contact-form-7 id="164" title="quote"]' ); ?>

</form></div>
</div>
</section>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
