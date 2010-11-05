<?php
/*
* Template Name: No sidebar (works on original layout)
*
* Selectable from a dropdown menu on the edit page screen.
* It simply hide the right sidebar from LightWord theme and expand the content and the comments.
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<?php global $lw_layout_settings; if($lw_layout_settings == "Wider") : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/wider.css" type="text/css" />
<?php else: ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/original.css" type="text/css" />
<?php endif; ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/single-page-template.css" type="text/css" />
<link rel="shortcut icon" href="<?php echo home_url(); ?>/favicon.ico" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_enqueue_script('jquery'); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<!--[if IE 6]><style type="text/css">/*<![CDATA[*/#header{background-image: none; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo get_template_directory_uri(); ?>/images/single-page-template/content_top.png',sizingMethod='scale'); } /*]]>*/</style><![endif]-->
<?php wp_head(); ?>
</head>

<body>
<div id="wrapper">
<?php lightword_header_image(); ?>
<div id="header">
<?php lightword_rss_feed(); ?>
<?php global $lw_remove_rss; if($lw_remove_rss == "true") {  ?>
<?php echo "<style type=\"text/css\">/*<![CDATA[*/ #header{background:transparent url(".get_template_directory_uri()."/images/single-page-template/content_top_no_rss.png) no-repeat; } #content-body,x:-moz-any-link{float:left;margin-right:28px;}#content-body, x:-moz-any-link, x:default{float:none;margin-right:25px;}/*]]>*/</style>"; } ?>

<div id="top_bar">
<div class="center_menu">
<ul id="front_menu">
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

<div id="content-body">
<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div <?php if (function_exists("post_class")) post_class(); else print 'class="post"'; ?> id="post-<?php the_ID(); ?>">
<h2><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php edit_post_link(__('Edit this page','lightword'), '', ''); ?>

<?php the_content(''); ?>
<?php if(function_exists('wp_print')) { print_link(); } ?>
<?php wp_link_pages('before=<div class="nav_link">'.__('PAGES','lightword').': &after=</div>&next_or_number=number&pagelink=<span class="page_number">%</span>'); ?>

</div>
<?php if ( comments_open() && $lw_disable_comments == "false" ) : comments_template(); endif; ?>
<?php endwhile; else: ?>

<h2><?php _e('Not Found','lightword'); ?></h2>
<p><?php  _e("Sorry, but you are looking for something that isn't here.","lightword"); ?></p>

<?php endif; ?>
</div>
<?php get_footer(); ?>