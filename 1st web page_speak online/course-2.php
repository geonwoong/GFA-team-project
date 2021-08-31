<?php
/**
 * The template for displaying all pages.
 * Template Name: Course 2
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
	

.ast-builder-grid-row-container-inner {
	background-color: red;
}

</style>

<p>Hello World!</p>

<div style="height: 100px; width: 200px; background-color: red;"></div>

<?php get_footer(); ?>
