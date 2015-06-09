<header class="banner" role="banner">    
    <nav role="navigation">
             <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img class="logo" alt="plus10 logo" src="<?= get_template_directory_uri(); ?>/dist/images/logo.jpg" width="80">
             </a>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']);
      endif;
      ?>
    </nav>
</header>
