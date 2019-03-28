<?php
/*
Plugin Name: Dev To WordPress
Description: A widget to show your DEV.to posts in WordPress
Author: Anderson J Vargas
Version: 2.0
Author URI: http://andersonjoseph.ml
*/

class DTW_Widget extends WP_Widget {
  public function __construct() {
    $widget_ops = array(
      'classname' => 'DTW_Widget',
      'description' => 'A widget to show your DEV.to Posts in WordPress',
    );

    parent::__construct('DTW_Widget', 'Dev to WordPress', $widget_ops);
  }

  public function form($instance) {
    $title = isset($instance['title']) ? esc_html__($instance['title']) : 'Dev.to Posts';
    $username = isset($instance['username']) ? esc_html__($instance['username']) : '';
    $num_of_posts = isset($instance['num_of_posts']) ? esc_html__($instance['num_of_posts']) : '0';

    include 'admin/admin-form.php';
  }

  public function widget($args, $instance) {
    echo $args['before_widget'];

    wp_enqueue_script('DTW_get_posts');
    wp_enqueue_style('DTW_style_post');

    include 'public/widget.php';

    echo $args['after_widget'];
  }

  public function update($new_instance, $old_instance) {
    $instance = array();

    $instance['title'] = isset($new_instance['title']) ? $new_instance['title'] : '';
    $instance['username'] = isset($new_instance['username']) ? $new_instance['username'] : '';
    $instance['num_of_posts'] = isset($new_instance['num_of_posts']) ? $new_instance['num_of_posts'] : '';

    return $instance;
  }
}

/*
  << Register JS scripts >>
*/
add_action('wp_enqueue_scripts', function() {
  wp_register_script('DTW_get_posts', plugins_url('dev-to-wordpress/public/js/dev-to-wordpress.js'));
  wp_localize_script('DTW_get_posts', 'DTW_image_reactions', plugins_url('dev-to-wordpress/public/img/reactions.png'));
  wp_localize_script('DTW_get_posts', 'DTW_image_comments', plugins_url('dev-to-wordpress/public/img/comments.png'));
});

/*
  << Register CSS styles >>
*/
add_action('wp_enqueue_scripts', function() {
  wp_register_style('DTW_style_post', plugins_url('dev-to-wordpress/public/css/style.css'));
});

/*
  << Register Widget >>
*/
add_action('widgets_init', function() {
  register_widget('DTW_Widget');
});

/*
  << Including shortcode >>
*/

include plugin_dir_path(__FILE__) . 'shortcode/DTW-shortcode.php';
