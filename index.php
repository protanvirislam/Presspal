
<!DOCTYPE html>
<html <?php language_attributes( );?> >

<!-- Header Open -->
<head>
    <meta charset= "<?php bloginfo('charset'); ?>" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head( ); ?>
</head>
<!-- Header Close -->
<!-- Body Open -->
<body <?php body_class( ); ?>>
  <?php wp_body_open() ?>

  <main>
    <!-- Main content are here -->
  </main> 

  <footer>
    <!-- Footer is here -->
  </footer>
  
  <?php wp_footer() ?>
</body>
<!-- Body Close -->
</html>

