<!DOCTYPE html>
<head>
<title>
  <?php wp_title('|', true, 'right'); bloginfo('name'); ?>
</title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
</head>

<body>
  <header id="masthead">
    <div class="container">
      <div id="menu-top">
        
        <div id="logo" class="col-md-9">
          <div class="row">
            <h1>
              <a href="<?php bloginfo('url'); ?>">
                <?php bloginfo('name'); ?>
              </a>
            </h1>
          </div>
        </div>
        
        <div id="redes-sociales" class="col-md-3">
          <nav>
            <ul>
              <li>
                <a href="https://twitter.com/akkonomi" class="fa fa-twitter"></a>
              </li>
              <li>
                <a href="https://github.com/4k1k0/" class="fa fa-github"></a>
              </li>
              <li>
                <a href="https://gs.smuglo.li/akko" class="fa fa-linux"></a>
              </li>
            </ul>
          </nav>
        </div>
        
        <div id="menu">
          <?php wp_nav_menu(array('menu' => 'Top')); ?>
        </div>
        
      </div>
    </div>    
  </header>
