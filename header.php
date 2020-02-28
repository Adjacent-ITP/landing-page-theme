<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<!--
		-- stylesheets
		-->
		<link href="<?php echo get_bloginfo('template_directory'); ?>/styles/_reset.css" rel="stylesheet">
		<link href="<?php echo get_bloginfo('template_directory'); ?>/styles/_colors.css" rel="stylesheet">
		<link href="<?php echo get_bloginfo('template_directory'); ?>/styles/_fonts.css" rel="stylesheet">
		<link href="<?php echo get_bloginfo('template_directory'); ?>/styles/_variables.css" rel="stylesheet">
		<link href="<?php echo get_bloginfo('template_directory'); ?>/styles/main.css" rel="stylesheet">
		<link href="<?php echo get_bloginfo('template_directory'); ?>/styles/header.css" rel="stylesheet">

	</head>
