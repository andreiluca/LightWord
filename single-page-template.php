<?php
/*
* Template Name: No sidebar (works on original layout)
*
* Selectable from a dropdown menu on the edit page screen.
* It simply hide the right sidebar from LightWord theme and expand the content and the comments.
*/
?>
<?php add_action('wp_print_styles', 'single_page_template_css'); ?>
<?php get_header(); ?>

<div id="content-body">
<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div <?php if (function_exists('post_class')) post_class(); else print 'class="post"'; ?> id="post-<?php the_ID(); ?>">
<h2><a title="<?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php edit_post_link(__('Edit this page','lightword'), '', ''); ?>

<?php the_content(''); ?>
<?php if(function_exists('wp_print')) { print_link(); } ?>
<?php wp_link_pages('before=<div class="nav_link">'.__('PAGES','lightword').': &after=</div>&next_or_number=number&pagelink=<span class="page_number">%</span>'); ?>

</div>
<?php if ( comments_open() && $lw_disable_comments == 'false' ) : comments_template(); endif; ?>
<?php endwhile; else: ?>

<h2><?php _e('Not Found','lightword'); ?></h2>
<p><?php  _e('Sorry, but you are looking for something that isn\'t here.','lightword'); ?></p>

<?php endif; ?>
</div>
<?php get_footer(); ?>