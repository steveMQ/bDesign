<html>
  <head>
    <?php wp_head(); ?>

    <!-- To ensure proper rendering, with zooming disabled -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- stylesheet -->
    <link href="<?php echo get_stylesheet_uri(); ?>" type="text/css" rel="stylesheet"/>

    <!-- live reload feature for use in development -->
    <script>
      document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
      ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/build/vendor.js"></script>
  </head>

  <body>
    <header>
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Branding/Logo and toggle hamburger code -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bdesign-navbar-collapse" aria-expanded="false">
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
              <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/imgs/tempLogo1.png"  />
            </a>
          </div>
          <!--nav links, forms, and other content that may be toggled goes here -->
          <div class="collapse navbar-collapse" id="bdesign-navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="active">
                <a href="#">Home<span class="sr-only">(current)</span></a>
              </li>
              <li><a href="#">About</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>

    </header>
