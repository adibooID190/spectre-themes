<nav class="navbar navbar-expand-sm static-top navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo get_bloginfo(); ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar">
    <?php
    wp_nav_menu([
      'menu'            => 'top',
      'theme_location'  => 'header',
      'menu_id'         => false,
      'menu_class'      => 'navbar-nav mr-auto',
      'depth'           => 2,
      'fallback_cb'     => 'bs4navwalker::fallback',
      'walker'          => new bs4navwalker()
    ]); ?>
    
    <?php if(get_theme_mod('search-bar') === true){ ?>
    <div class="input-group input-group-sm mb-3">
      <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
      <div class="input-group-append">
         <button class="btn btn-outline-secondary" type="button">Button</button>
      </div>
    </div>
    <?php } ?>
  </div>
</nav>