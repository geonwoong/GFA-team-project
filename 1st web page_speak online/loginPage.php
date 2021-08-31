<?php

/**
 * The template for displaying all pages.
 * Template Name:loginPage
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

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header(); ?>
<body>
<?php 
echo do_shortcode('[contact-form-7 id="483" title="captcha_form"]')
?>
</body>

<?php get_footer(); ?>
