<?php
/**
 * @package ukmtheme
 * @subpackage ukm-i-senada
 * @since 1.0
 */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>