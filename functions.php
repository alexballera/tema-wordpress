<?php 
function portfolio_scripts_with_jquery()
{
  // Register the script like this for a theme:
  wp_register_script( 'custom-script', get_template_directory_uri() . '/scripts/main.js', array( 'jquery' ) );
  // For either a plugin or a theme, you can then enqueue the script:
  wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts_with_jquery' );
add_theme_support( 'html5', array( 'search-form' ) );
?>