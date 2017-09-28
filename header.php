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
    <div class="container-fluid">
      <div id="menu-top">
        
        <div id="logo" class="col-md-6">
          
        </div>
        
        <div id="menu" class="col-md-6">
          <nav>
            <ul>
              <li>
                <a href="https://twitter.com/akkonomi" class="fa fa-twitter"></a>
              </li>
              <li>
                <a href="https://github.com/4k1k0/" class="fa fa-github"></a>
              </li>
            </ul>
          </nav>
        </div>
        
      </div>
    </div>    
  </header>
