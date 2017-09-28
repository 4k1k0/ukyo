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
      </div>
    </div>    
  </header>
