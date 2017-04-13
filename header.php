<html>
  <head>
    <?php wp_head(); ?>

    <!-- stylesheet -->
    <link href="<?php echo get_stylesheet_uri(); ?>" type="text/css" rel="stylesheet"/>
    <!-- live reload feature for use in development -->
    <script>
      document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
      ':35729/livereload.js?snipver=1"></' + 'script>')
    </script>



  </head>

  <body>
    <header>
      <h1 class="narwhals">this is the header file.</h1>
    </header>
