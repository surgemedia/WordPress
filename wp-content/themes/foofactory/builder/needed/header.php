<header class="banner">
  <div class="container-fluid">
    <div class="navbar-header col-md-12" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainmenu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="col-sm-4 pull-left">
         <?php 
        get_component([
              'template' => 'parts/brand',
              'vars' => [
                          'logo' => get_field('logo','option')
                        ]
        ]);
        ?>
      </div>
      <div class="col-sm-2 pull-right text-right">
         <a href="#" id="request" class="btn">Request a <b>quote</b></a>
         <div class="phone"><?php get_field('phone','option'); ?></div>
      </div>
    </div>
    <div class="navbar-collapse" id="mainmenu">
      <nav class="nav-primary col-md-12">
        <?php
        if (has_nav_menu('primary')) :
           wp_nav_menu(['theme_location' => 'primary', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
        endif;
        ?>
      </nav>
    </div>
  </div>
</header>
