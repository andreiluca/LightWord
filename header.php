<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
<title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<?php global $lw_layout_settings,$lw_sidebar_settings; if($lw_layout_settings == "Wider") : ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/wider.css" type="text/css" />
<?php if($lw_sidebar_settings=="Two sidebars"): ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/new_sidebar.css" type="text/css" />
<?php endif; ?>
<?php else: ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/original.css" type="text/css" />
<?php endif; ?>
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_enqueue_script('jquery'); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php global $lw_header_content, $lw_wp3_menus; echo "\n".$lw_header_content."\n"; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<?php lightword_header_image(); ?>
<div id="header">
<?php lightword_rss_feed(); ?>

<div id="top_bar">
<div class="center_menu">
<ul id="front_menu" <?php global $lw_remove_searchbox; $lw_menu_width = ""; if($lw_remove_searchbox == "true") $lw_menu_width = "  class=\"expand\" "; echo $lw_menu_width; ?>>
<?php echo lightword_homebtn(__('Home','lightword')); ?>
<?php
if ( function_exists('wp_nav_menu') ) {
$lightword_menu = wp_nav_menu( array( 'menu'=>'lightword_top_menu', 'fallback_cb'=>'lightword_wp_list_pages',  'echo' => false, 'menu_id'=>'front_menu', 'container' => '', 'theme_location' => 'lightword_top_menu', 'link_before'=>'<span>', 'link_after'=>'</span>' ) );
$lightword_menu = str_replace(array('<ul id="front_menu" class="menu">','</ul>'), array(''), $lightword_menu);
echo $lightword_menu;
}else{
echo lightword_wp_list_pages();
}
?>
</ul>
</div>
<?php echo lightword_searchbox(); ?>
</div>

</div>
<div id="content">