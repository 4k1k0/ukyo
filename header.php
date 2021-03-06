<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>
  <?php wp_title('|', true, 'right'); bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
</head>

<body>
  <header id="masthead">

    <div id="menu-mobile-abrir-contenedor" class="visible-xs visible-sm">
      <button>
        <i id="menu-mobile-abrir-boton" class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <h1>
        <a href="<?php bloginfo('url'); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </h1>
    </div>

    <div id="menu-mobile" class="visible-xs visible-sm">

      <div id="menu-mobile-cerrar">
        <button id="menu-mobile-cerrar-boton-contenedor">
          <i id="menu-mobile-cerrar-boton" class="fa fa-times" aria-hidden="true"></i>
        </button>
      </div>

      <div id="menu-mobile-menu">
        <nav>
          <a id="menu-mobile-menu-inicio" href="<?php bloginfo('url'); ?>">Inicio</a>
          <?php wp_nav_menu(array('menu' => 'Top')); ?>
        </nav>
      </div>

      <div id="menu-mobile-redes">
        <nav>
          <ul>
            <li><a href="https://twitter.com/akkonomi" class="fa fa-twitter" target="_blank"></a></li>
            <li><a href="https://github.com/4k1k0/" class="fa fa-github" target="_blank"></a></li>
            <li><a href="https://gs.smuglo.li/akko" class="fa fa-linux" target="_blank"></a></li>
          </ul>
        </nav>
      </div>

    </div>

    <div class="container">

      <div id="menu-top" class="hidden-xs hidden-sm">

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
                <a href="https://twitter.com/akkonomi" class="fa fa-twitter" target="_blank"></a>
              </li>
              <li>
                <a href="https://github.com/4k1k0/" class="fa fa-github" target="_blank"></a>
              </li>
              <li>
                <a href="https://gs.smuglo.li/akko" class="fa fa-linux" target="_blank"></a>
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
