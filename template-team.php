<?php
/**
 * Template Name: Team
 */

the_post();

// Get 'team' posts
$team_posts = get_posts( array(
	'post_type' => 'team',
	'posts_per_page' => -1, // Unlimited posts
	'orderby' => 'title', // Order alphabetically by name
) );

if ( $team_posts ):
?>


	          
	<div id="members">	

		<h1>Our Co-workers</h1>
			<hr>
	
	<section class="co-workers">

<h4>Members</h4>

	<ul class="members-full-list">
		<?php 

	foreach ( $team_posts as $post ): 
	setup_postdata($post);
	
	// Resize and CDNize thumbnails using Automattic Photon service
	$thumb_src = null;
	if ( has_post_thumbnail($post->ID) ) {
		$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
		$thumb_src = $src[0];
	}
	?>

<li>
				<?php if ( $thumb_src ): ?>
				<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>" class="img-circle">
					<?php endif; ?>
			
				<h5><?php the_title(); ?></h5>
				<p class="lead position"><?php the_field('co-worker_role'); ?></p>
				<p>
				<a target="_blank" href="mailto:<?php echo antispambot( get_field('co-worker_email') ); ?>"><i class="fa fa-envelope"></i></a>
				<?php if ( $twitter = get_field('co-worker_twitter') ): ?>
				<a target="_blank" href="<?php echo $twitter; ?>"><i class="fa fa-twitter"></i></a>
				<?php endif; ?>
				<?php if ( $website = get_field('co-worker_website') ): ?>
				<a target="_blank" href="<?php echo $website; ?>"><i class="fa fa-globe"></i></a>
				<?php endif; ?>
				<?php if ( $linkedin = get_field('co-worker_linkedin') ): ?>
				<a target="_blank" href="<?php echo $linkedin; ?>"><i class="fa fa-linkedin"></i></a>
				<?php endif; ?>
				</p>
</li>
	<?php endforeach; ?>
	
	</ul><!-- /.profile -->

	<?php endif; ?>
	</section>
<section>


<h4>Startups</h4>

<?php // Get 'team' posts
$startup_posts = get_posts( array(
	'post_type' => 'startup',
	'posts_per_page' => -1, // Unlimited posts
	'orderby' => 'title', // Order alphabetically by name
) );

if ( $startup_posts ):
?>

<ul class="startups-full-list">

		<?php 

	foreach ( $startup_posts as $post ): 
	setup_postdata($post);
	
	// Resize and CDNize thumbnails using Automattic Photon service
	$thumb_src = null;
	if ( has_post_thumbnail($post->ID) ) {
		$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
		$thumb_src = $src[0];
	}
	?>

<li>
				<?php if ( $thumb_src ): ?>
				<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>" class="img-circle">
					<?php endif; ?>
			
				<h5><?php the_title(); ?></h5>
				<p class="lead position"><?php the_field('co-worker_role'); ?></p>
				<a href="mailto:<?php echo antispambot( get_field('co-worker_email') ); ?>"><i class="icon-envelope"></i></a>
				<?php if ( $twitter = get_field('co-worker_twitter') ): ?>
				<a href="<?php echo $twitter; ?>"><i class="icon-twitter"></i></a>
				<?php endif; ?>
				<?php if ( $website = get_field('co-worker_website') ): ?>
				<a href="<?php echo $website; ?>"><i class="icon-website"></i></a>
				<?php endif; ?>
				<?php if ( $linkedin = get_field('co-worker_linkedin') ): ?>
				<a href="<?php echo $linkedin; ?>"><i class="icon-linkedin"></i></a>
				<?php endif; ?>
</li>
	<?php endforeach; ?>
	
	</ul><!-- /.profile -->

	<?php endif; ?>

	<section class="join">
	   <div class="pull-out mailing-list">
	   	<h3>Join Us</h3>
	   	<p>Arrange a meeting to chat an informal chat and tour of the space</p>
		<h4>Drop us a message</h4>
	
		<?php echo do_shortcode( '[contact-form-7 id="164" title="Join Us"]' ); ?>

	   </div>
</section>
</div>
