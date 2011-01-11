<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php global $lw_header_content, $lw_wp3_menus; echo "\n".$lw_header_content."\n"; ?>
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">
<?php lightword_header_image(); ?>
<div id="header">
<?php lightword_rss_feed(); ?>

<div id="top_bar">
<div class="center_menu">
<ul id="front_menu" <?php global $lw_remove_searchbox, $lw_use_dumb_menu; $lw_menu_width = ''; if($lw_remove_searchbox == 'true') $lw_menu_width = ' class="expand" '; echo $lw_menu_width; ?>>
<?php echo lightword_homebtn(__('Home','lightword')); ?>
<?php
if ( function_exists('wp_nav_menu') && $lw_use_dumb_menu != 'true') {
$lightword_menu = wp_nav_menu( array( 'menu' => 'lightword_top_menu', 'echo' => false, 'menu_id' => 'front_menu', 'container' => '', 'theme_location' => 'lightword_top_menu', 'link_before' => '<span>', 'link_after' => '</span>' ) );
$lightword_menu = preg_replace( array( '/^<ul id="front_menu" class="menu">/', '/\n<\/ul>$/' ), '', $lightword_menu);
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