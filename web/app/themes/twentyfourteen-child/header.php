<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="//cloud.typography.com/6812632/687364/css/fonts.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header">

	<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'container_class' => 'navigation nav-collapse'
		));
	?>

	<header>

		<?php get_template_part('content', 'featured-image'); ?>
		<div id="logo">
			<a href="/" title="Home">
				<img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="Not Here">
			</a>
		</div>

		<button id="nav-toggle" class="toggle" role="button">
			<span class="first"></span>
			<span class="second"></span>
			<span class="third"></span>
		</button>
	</header>
</div>