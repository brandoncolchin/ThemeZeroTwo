<?php
/**
 * Plugin Name: Load Posts Brandon
 * Plugin URI: http://brandoncolchin.com
 * Description: This is a plugin that allows us to test Ajax functionality in WordPress
 * Version: 1.0.0
 * Author: Brandon Colchin
 * Author URI: http://brandoncolchin.com
 * License: GPL2
 */
 add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

 function my_enqueue_scripts() {
    wp_enqueue_script( 'load_posts',  get_template_directory_uri() . '/js/load-posts.js', array( 'jquery' ), '1.0', true );
    global $wp_query;
    wp_localize_script( 'load_posts', 'load_posts', array(
	'ajaxurl' => admin_url( 'admin-ajax.php' ),
  'query_vars' => json_encode( $wp_query->query )
));
}

add_action( 'wp_ajax_nopriv_addMorePosts', 'my_load_posts' );
add_action( 'wp_ajax_addMorePosts', 'my_load_posts' );

function my_load_posts() {
  $paged = $_POST['page'] + 1;

  $params = array('post_type' => 'post', 'paged' => $paged, 'post_status' => 'publish');
  $the_query = new WP_Query($params);

  if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();

  get_template_part( 'loop-templates/content', 'blog' );

  endwhile;

  endif;

  wp_reset_postdata();
    die();
}
