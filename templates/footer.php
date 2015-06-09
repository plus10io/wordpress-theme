<div class="bg-colour-wrap">
	<footer role="footer info">
	<div class="footer-col">
		<img alt="Brand" src="<?= get_template_directory_uri(); ?>/dist/images/logo.jpg" width="150">
	</div>
	<div class="footer-col">
    	<?php dynamic_sidebar('sidebar-footer'); ?>
	</div>
	<div class="footer-col">
    	<?php dynamic_sidebar('sidebar-footer2'); ?>
	</div>
	<div class="footer-col">
    	<h5>Subscribe to our mailing list</h5>
    	<label>List this post? Sign up to our mailing list and we will keep you updated on future news</label>
		<input id="mc4wp_email" class="mailchimp-input" name="EMAIL" required="" type="email" placeholder="Your email address" />
		<input type="submit" value="Sign up" />
	</div>
	</footer>
</div>
