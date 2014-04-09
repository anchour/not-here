<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6812632/687364/css/fonts.css" />

  <?php wp_head(); ?>

  <!--[if lt IE 9]><script src="<?= get_template_directory_uri() . '/assets/js/vendor/respond.min.js'; ?>"></script><![endif]-->
  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
