<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">
<section>
<main class="main" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
</section>
<section class="map">
  <h3>Our Location</h3>
  <iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9848.20474211186!2d-8.476445!3d51.89653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92ad116a1ce25c05!2sPlus+10!5e0!3m2!1sen!2sie!4v1431215019446" width="600" height="450" frameborder="0"></iframe>
</section>

    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
