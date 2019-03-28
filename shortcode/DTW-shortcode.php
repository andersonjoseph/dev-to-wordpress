<?php
/*
  << Shortcode >>
 [devtowordpress post="https://dev.to/user/path-to-post"]
*/
function DTW_shortcode($attributes) {
  $postURL = $attributes['post'];

  wp_enqueue_script('DTW_shortcode_script');
  wp_enqueue_style('DTW_shortcode_style');

  return '<div data-post="'. $postURL. '" class="DTW_shortcode_container"><div style="text-align: center;"><div class="lds-dual-ring"></div></div></div>';
}
add_shortcode('devtowordpress', 'DTW_shortcode');


/*
  << Register JS scripts >>
*/
add_action('wp_enqueue_scripts', function() {
  wp_register_script('DTW_shortcode_script', plugins_url('dev-to-wordpress/shortcode/get-post.js'));
  wp_localize_script('DTW_shortcode_script', 'DTW_image_reactions', plugins_url('dev-to-wordpress/public/img/reactions.png'));
});

/*
  << Register styles >>
*/
add_action('wp_enqueue_scripts', function() {
  wp_register_style('DTW_shortcode_style', plugins_url('dev-to-wordpress/shortcode/style.css'));
});

