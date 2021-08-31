<?php
/**
 * The template for displaying all pages.
 * Template Name: GFA-home
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<style type="text/css">
	
.qwe {
	background-color: yellow;
}

</style>

<p>Hello World!</p>

<p class="qwe">Hello Guys!</p>

<?php get_footer(); ?>
