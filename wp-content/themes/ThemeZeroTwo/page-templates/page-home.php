<?php
/*
Template Name: Home Page
*/

get_header(); ?>


<?php get_template_part( 'loop-templates/content', 'carousel-home' ); ?>

<?php get_template_part( 'loop-templates/content', 'stickies' ); ?>

<?php get_template_part( 'loop-templates/content', 'spotlight' ); ?>

<?php// get_template_part('loop-templates/content','signup'); ?>

<?php get_template_part( 'loop-templates/content', 'optin' ); ?>

<?php
get_footer();
?>
