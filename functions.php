<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'functions.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly. Thanks!');

$themename = "LightWord";
$shortname = "lw";
$top_header_image_path = get_template_directory_uri()."/images/header-image.png";

if ( ! isset( $content_width ) ) $content_width = 550;

$options = array (

    array(	"name" => "Welcome",
			"type" => "title"),

	array(	"type" => "open"),

    array(  "name" => __('Layout settings', 'lightword'),
            "id" => $shortname."_layout_settings",
            "options" => array(__('Original','lightword'), __('Wider','lightword')),
            "std" => __('Original','lightword'),
            "desc" => __('','lightword'),
            "type" => "select"),

    array(  "name" => __('Cuf&oacute;n settings', 'lightword'),
			"desc" => __('Show some texts in your blog using Cuf&oacute;n&sup1; (blog title, tagline, post titles, page titles, etc.).<br /><br />Select <em>Extra</em>&sup2; (or <em>Disabled</em>) for languages with accents and special characters.','lightword'),
            "id" => $shortname."_cufon_settings",
            "options" => array(__('Enabled','lightword'), __('Disabled','lightword'), __('Extra','lightword'), __('CSS3 Font-face (lightweight)')),
            "std" => __('Enabled','lightword'),
            "type" => "select"),

    array(  "name" => __('Disable comments on pages','lightword'),
			"desc" => __('Check this box if you would like to DISABLE COMMENTS on pages','lightword'),
            "id" => $shortname."_disable_comments",
            "type" => "checkbox",
            "std" => "false"),

    array(  "name" => __('Custom image header', 'lightword'),
            "id" => $shortname."_top_header_image",
            "options" => array( __('Disabled','lightword'), __('Enabled','lightword') ),
            "std" => __('Disabled','lightword'),
            "desc" => '',
            "type" => "select"),

    array(  "name" => __('Header image height in pixels','lightword'),
			"desc" => '',
            "id" => $shortname."_top_header_image_height",
            "type" => "header_image_height",
            "std" => "56"),

    array(  "name" => __('Header image width in pixels','lightword'),
			"desc" => '',
            "id" => $shortname."_top_header_image_width",
            "type" => "header_image_width",
            "std" => "600"),

    array(  "name" => __('About author feature', 'lightword'),
            "desc" => __('Add information about post author','lightword'),
            "id" => $shortname."_post_author",
            "options" => array(__('Disabled','lightword'), __('Main page','lightword'), __('Single page','lightword'), __('Both','lightword')),
            "std" => __('Disabled','lightword'),
            "type" => "select"),

    array(  "name" => __('Enjoy this post feature','lightword'),
			"desc" => __('Check this box if you would like to ACTIVATE <em>Enjoy this post</em> feature','lightword'),
            "id" => $shortname."_enjoy_post",
            "type" => "checkbox",
            "std" => "false"),

    array(  "name" => __('Use basic wordpress pages/categories in front menu','lightword'),
			"desc" => __('I don\'t want those awesome WP3 features.','lightword'),
            "id" => $shortname."_use_wp_menus",
            "type" => "checkbox",
            "std" => ""),

    array(  "name" => __('Show categories on front menu','lightword'),
			"desc" => __('Check this box if you would like to SHOW CATEGORIES instead pages on front menu','lightword'),
            "id" => $shortname."_show_categories",
            "type" => "checkbox",
            "std" => "false"),

    array(  "name" => __('Exclude pages from front menu','lightword'),
			"desc" => __('Type the pages id in the box below. Example input: <code>5,19,24</code>','lightword'),
            "id" => $shortname."_exclude_pages",
            "type" => "exclude_pages",
            "std" => ""),

    array(  "name" => __('Exclude categories from front menu','lightword'),
			"desc" => __('Type the categories id in the box below. Example input: <code>5,19,24</code>','lightword'),
            "id" => $shortname."_exclude_categories",
            "type" => "exclude_categories",
            "std" => ""),

    array(  "name" => __('Remove home button','lightword'),
			"desc" => __('Remove home button from front menu','lightword'),
            "id" => $shortname."_remove_homebtn",
            "type" => "checkbox",
            "std" => "false"),

    array(  "name" => __('Remove search box','lightword'),
			"desc" => __('Remove search box and expand space for front menu','lightword'),
            "id" => $shortname."_remove_searchbox",
            "type" => "checkbox",
            "std" => "false"),

    array(  "name" => __('Remove tags from posts','lightword'),
			"desc" => __('Show only categories in post footer','lightword'),
            "id" => $shortname."_disable_tags",
            "type" => "checkbox",
            "std" => "false"),

    array(  "name" => __('Remove RSS badge','lightword'),
			"desc" => __('Remove RSS badge from blog header','lightword'),
            "id" => $shortname."_remove_rss",
            "type" => "checkbox",
            "std" => "false"),

    array(  "name" => __('Google Custom Search Engine','lightword'),
			"desc" => __('Find <code>name="cx"</code> in the <strong>Search box code</strong> of Google CSE, and type the <code>value</code> here.','lightword'),
            "id" => $shortname."_google_search_code",
            "type" => "text",
            "std" => ""),

    array(  "name" => __('Sidebox settings', 'lightword'),
            "id" => $shortname."_sidebox_settings",
            "options" => array(__('Enabled','lightword'), __('Disabled','lightword'), __('Show only date','lightword'), __('Show only in posts','lightword'), __('Last two options together','lightword')),
            "std" => __('Enabled','lightword'),
            "desc" => '',
            "type" => "select"),

    array(  "name" => __('Sidebar settings', 'lightword'),
            "id" => $shortname."_sidebar_settings",
            "desc" => __('Two sidebars option is available on Wider layout only','lightword'),
            "options" => array(__('One sidebar','lightword'), __('Two sidebars','lightword')),
            "std" => __('One sidebar','lightword'),
            "type" => "select"),

    array(  "name" => __('Custom CSS', 'lightword'),
			"desc" => __('Put your custom css code here','lightword'),
            "id" => $shortname."_custom_css",
            "type" => "textarea",
            "std" => ""),

    array(  "name" => __('AdSense', 'lightword'),
			"desc" => __('Copy your AdSense code or any other ADS service and paste it here.<br/>Usually 468x60 text or image ad but you can use anything ad format you want.','lightword'),
            "id" => $shortname."_adsense_spot",
            "type" => "textarea",
            "std" => ""),

    array(  "name" => __('Additional header content', 'lightword'),
			"desc" => __('Additional header content, including scripts, etc','lightword'),
            "id" => $shortname."_header_content",
            "type" => "textarea",
            "std" => ""),

    array(  "name" => __('Additional footer content', 'lightword'),
			"desc" => __('Additional footer content for Google Analytics or any other service','lightword'),
            "id" => $shortname."_footer_content",
            "type" => "textarea",
            "std" => ""),

	array(	"type" => "close")


);

// ADMIN PAGE FUNCTIONS

function lightword_admin() {
global $themename, $shortname, $options;

if ( nullit($_GET['page']) == basename(__FILE__) ) {
if ( 'save' == nullit($_REQUEST['action']) ) {

foreach ($options as $value) {
update_option( @$value['id'], lightword_stripslash_check(@$_REQUEST[ $value['id'] ]) ); }

foreach ($options as $value) {
if( isset( $_REQUEST[ @$value['id'] ] ) ) {
    update_option( @$value['id'], lightword_stripslash_check($_REQUEST[ $value['id'] ])  );
    } else {
    delete_option( @$value['id'] );
    }
}
	header("Location: themes.php?page=functions.php&saved=true");

} else if( 'reset' == nullit($_REQUEST['action']) ) {
foreach ($options as $value) {
delete_option( @$value['id'] ); }
	header("Location: themes.php?page=functions.php&reset=true");
}
}
add_theme_page(__('LightWord Settings','lightword'), __('LightWord Settings','lightword'), 'edit_themes', basename(__FILE__), 'lightword_admin_page');
}

// ADMIN PAGE LAYOUT

function lightword_admin_page() {
global $themename, $themeversion, $shortname, $options, $lw_top_header_image, $top_header_image_height, $lw_show_categories;
if ( nullit($_REQUEST['saved']) ) { echo '<div id="message" class="updated fade"><p><strong>'.$themename.' '; _e('settings saved','lightword'); echo '.</strong></p></div>'; }
if ( nullit($_REQUEST['reset']) ) { echo '<div id="message" class="updated fade"><p><strong>'.$themename.' '; _e('settings reset','lightword'); echo '.</strong></p></div>'; }
?>
<div class="wrap">

<h2><?php _e('LightWord Settings','lightword') ?></h2>

<div id="poststuff" class="metabox-holder">
<div class="stuffbox">
<h3><label for="link_url"><?php _e('Support the developer','lightword'); ?></label></h3>
<div class="inside">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5545477">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div></div>
<form method="post">

<p class="submit" style="margin-top:-2em;">
<input name="save" type="submit" value="<?php _e('Save changes','lightword'); ?>" class="button-primary" />
<input type="hidden" name="action" value="save" />
</p>

<div class="stuffbox">
<h3><label for="link_url"><?php _e('General settings','lightword'); ?></label></h3>
<div class="inside">



<?php foreach ($options as $value) { switch ( $value['type'] ) { case "open": ?>
<table width="100%" border="0" style="padding:10px;">
<?php break; case "close": ?>
</table><br />
<?php break;case 'text':?>

<tr><td width="20%" rowspan="2" valign="middle"><strong style="font-size:11px;"><?php _e("".$value['name']."","lightword"); ?></strong></td>
<td width="80%"><input style="width:300px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" /></td>
</tr><tr><td><small><?php _e("".$value['desc']."","lightword"); ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px solid #E1E1E1;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

<?php break;case 'textarea':?>


<tr><td width="20%" rowspan="2" valign="middle"><strong><?php echo _e("".$value['name']."","lightword"); ?></strong></td>
<td width="90%"><div class="toggle"><textarea name="<?php echo $value['id']; ?>" style="width:500px; height:150px;" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?></textarea></td></tr>
<tr><td><small><?php _e("".$value['desc']."","lightword"); ?></small></td>
</tr><tr></tr><tr><td colspan="2">&nbsp;</td></tr>


<?php break; case 'select': ?>
<tr>
<td width="20%" rowspan="2" valign="middle"><strong style="font-size:11px;"><?php _e("".$value['name']."","lightword"); ?></strong></td>
<td width="80%"><select style="width:200px;" name="<?php _e("".$value['id']."","lightword"); ?>" id="<?php echo $value['id']; ?>"><?php foreach ($value['options'] as $option) { ?><option<?php if ( get_option( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?> value="<?php echo $option; ?>"><?php _e("".$option."","lightword"); ?></option><?php } ?></select></td>
</tr><tr><td><small><?php _e("".$value['desc']."","lightword"); ?></small></td>
</tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px solid #E1E1E1;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>

<?php break; case 'header_image_height': ?>
<?php if($lw_top_header_image == "Enabled") : ?>
<tr>
<td width="20%" rowspan="2" valign="middle"><strong style="font-size:11px;"><?php _e("".$value['name']."","lightword"); ?></strong></td>
<td width="80%"><input style="width:50px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" /></td>
</tr><tr><td></td></tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px solid #E1E1E1;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
<?php endif; ?>

<?php break; case 'header_image_width': ?>
<?php if($lw_top_header_image == "Enabled") : ?>
<tr>
<td width="20%" rowspan="2" valign="middle"><strong style="font-size:11px;"><?php _e("".$value['name']."","lightword"); ?></strong></td>
<td width="80%"><input style="width:50px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" /></td>
</tr><tr><td></td></tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px solid #E1E1E1;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
<?php endif; ?>

<?php break; case 'exclude_pages': ?>
<?php if($lw_show_categories == "false" || $lw_show_categories == "") : ?>
<tr>
<td width="20%" rowspan="2" valign="middle"><strong style="font-size:11px;"><?php _e("".$value['name']."","lightword"); ?></strong></td>
<td width="80%"><input style="width:300px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" /></td>
</tr><tr><td><small><?php _e("".$value['desc']."","lightword"); ?></small></td></tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px solid #E1E1E1;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
<?php endif; ?>

<?php break; case 'exclude_categories': ?>
<?php if($lw_show_categories == "true") : ?>
<tr>
<td width="20%" rowspan="2" valign="middle"><strong style="font-size:11px;"><?php _e("".$value['name']."","lightword"); ?></strong></td>
<td width="80%"><input style="width:300px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo get_option( $value['id'] ); } else { echo $value['std']; } ?>" /></td>
</tr><tr><td><small><?php _e("".$value['desc']."","lightword"); ?></small></td></tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px solid #E1E1E1;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
<?php endif; ?>

<?php break; case "checkbox": ?>
<tr>
<td width="25%" rowspan="2" valign="middle"><strong style="font-size:11px;"><?php _e("".$value['name']."","lightword"); ?></strong></td>
<td width="75%"><?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = ""; } ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />   <small><?php _e("".$value['desc']."","lightword"); ?></small>
</td></tr><tr></tr><tr><td colspan="2" style="margin-bottom:5px;border-bottom:1px solid #E1E1E1;">&nbsp;</td></tr><tr><td colspan="2">&nbsp;</td></tr>
<?php break; } } ?>
</div></div>
<p class="submit" style="margin-top:-2em;">
<input name="save" type="submit" value="<?php _e('Save changes','lightword'); ?>" class="button-primary" />
<input type="hidden" name="action" value="save" />
</p>
</form>

<div class="stuffbox">
<h3><label for="link_url"><?php _e('Search for help','lightword'); ?> (<a href="http://www.lightworddesign.net/">blog</a> <?php _e('or','lightword'); ?> <a href="http://twitter.com/andreiluca">twitter</a>)</label></h3>
<div class="inside">

<?php // Get RSS Feed(s)
include_once(ABSPATH . WPINC . '/feed.php');

// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed('http://wordpress.org/support/rss/tags/lightword');
if (!is_wp_error( $rss ) ) : // Checks that the object is created correctly
    // Figure out how many total items there are, but limit it to 5.

    $maxitems = $rss->get_item_quantity(5);

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items(0, $maxitems);
    ?>

<ul>
    <?php if ($maxitems == 0) echo '<li>No items.</li>';
    else
    // Loop through each feed item and display each item as a hyperlink.
    foreach ( $rss_items as $item ) : ?>
    <li>
        <a href='<?php echo $item->get_permalink(); ?>'
        title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'>
        <?php echo substr($item->get_title(), 0,-6); ?></a>
    </li>
    <?php endforeach; ?>
</ul>


    <?php
    else: echo "Wordpress forums temporarily unavailable.";
endif;
?>


</div></div>

<div class="stuffbox">
<h3><label for="link_url"><?php _e('What is Cuf&oacute;n?','lightword'); ?> (<a href="http://cufon.shoqolate.com/generate/" target="_blank"><?php _e('website','lightword') ?></a>)</label></h3>
<div class="inside">
<p><?php _e('&sup1;Cuf&oacute;n is a Javascript Dynamic Text Replacement, like sIFR without flash plugin, just javascript.','lightword') ?><br/>
<br/><?php _e('&sup2;Extra Cuf&oacute;n contains (~<b>300kb js file</b>): Basic latin, uppercase, lowercase, numerals, punctuation, Latin-1 Supplement, Latin Extended-A, Cyrillic Alphabet, Russian Alphabet, Greek and Coptic; <strong>usefull for some accents and special characters</strong>.','lightword') ?>
<br/><br/><?php _e('Korean characters are not supported (11000+ glyps is a bit too much - enormous file -> slow loading).','lightword') ?></p>
</div></div>
<form method="post" style="float:right;">
<input name="reset" type="submit" value="<?php _e('Click here to reset all settings','lightword'); ?>" style="cursor:pointer;" />
<input type="hidden" name="action" value="reset" /><div style="clear:both;height:30px;"></div>
</form>
</div>
<?php
}


foreach ($options as $value) {
$id = ''; if (isset($value['id'])) { $id = $value['id']; }
$std = ''; if (isset($value['std'])) { $std = $value['std']; }
if (get_option( $id ) === FALSE) {
$$id= $std;
} else {
$$id = get_option( $id );
}
}

/**
 * count for trackback, pingback, comment, pings
 *
 * embed like this:
 * fb_comment_type_count('pings');
 * fb_comment_type_count('comment');
 * http://code.google.com/p/wp-basis-theme/
 */

 function lightword_fb_get_comment_type_count( $type='all', $zero = false, $one = false, $more = false, $post_id = 0) {
                global $cjd_comment_count_cache, $id, $post;

                if ( !$post_id )
                        $post_id = $post->ID;
                if ( !$post_id )
                        return;

                if ( !isset($cjd_comment_count_cache[$post_id]) ) {
                        $p = get_post($post_id);
                        $p = array($p);
                        lightword_fb_update_comment_type_cache($p);
                }
                ;
                if ( $type == 'pingback' || $type == 'trackback' || $type == 'comment' )
                        $count = $cjd_comment_count_cache[$post_id][$type];
                elseif ( $type == 'pings' )
                        $count = $cjd_comment_count_cache[$post_id]['pingback'] + $cjd_comment_count_cache[$post_id]['trackback'];
                else
                        $count = array_sum((array) $cjd_comment_count_cache[$post_id]);

                return apply_filters('lightword_fb_get_comment_type_count', $count);
        }

if ( !function_exists('lightword_fb_update_comment_type_cache') ) {
        function lightword_fb_update_comment_type_cache($queried_posts) {
        $post_id_list = "";
                global $cjd_comment_count_cache, $wpdb;

                if ( !$queried_posts )
                        return $queried_posts;

                foreach ( (array) $queried_posts as $post )
                        if ( !isset($cjd_comment_count_cache[$post->ID]) )
                                $post_id_list[] = $post->ID;

                if ( $post_id_list ) {
                        $post_id_list = implode(',', $post_id_list);

                        foreach ( array('', 'pingback', 'trackback') as $type ) {
                                $counts = $wpdb->get_results("SELECT ID, COUNT( comment_ID ) AS ccount
                                                        FROM $wpdb->posts
                                                        LEFT JOIN $wpdb->comments ON ( comment_post_ID = ID AND comment_approved = '1' AND comment_type='$type' )
                            WHERE (post_status = 'publish' OR (post_status = 'inherit' AND post_type = 'attachment')) AND ID IN ($post_id_list)
                                                        GROUP BY ID");

                                if ( $counts ) {
                                        if ( '' == $type )
                                                $type = 'comment';
                                        foreach ( $counts as $count )
                                                $cjd_comment_count_cache[$count->ID][$type] = $count->ccount;
                                }
                        }
                }

                return $queried_posts;
        }

        add_filter('the_posts', 'lightword_fb_update_comment_type_cache');
}

/** Added by Steven L from ISomehowHate.com and modifieed by Andrei on 07.4
| Fixes an issue that can occur when a user has magic_quotes switched to on.
| This ensures no \'s are added to the code which causes Google Adsense and perhaps other things to fail.
| Changes Made to Existing Code: Added stripslash_check to the update_option functions
**/

function lightword_stripslash_check($variable) {
        $stripped = stripslashes($variable);
        return $stripped;
}

// FRONT MENU / LIST PAGES OR CATEGORIES

function lightword_wp_list_pages(){
global $lw_show_categories, $lw_exclude_pages, $lw_exclude_categories;
if ($lw_show_categories == "true") {
$top_list = wp_list_categories("echo=0&depth=2&title_li=&hide_empty=0&exclude=".$lw_exclude_categories."");
$top_list = str_replace(array('">','</a>','<span><a','current-cat"><a'),array('"><span>','</span></a>','<a','"><a class="s"'), $top_list);
return $top_list;
}else{
$top_list = wp_list_pages("echo=0&depth=2&title_li=&exclude=".$lw_exclude_pages."");
$top_list = str_replace(array('">','</a>','<span><a','current_page_item"><a'),array('"><span>','</span></a>','<a','"><a class="s"'), $top_list);
return $top_list;
}

}

// HEADER IMAGE

function lightword_header_image(){
global $lw_top_header_image, $lw_top_header_image_height, $lw_top_header_image_width, $top_header_image_path;

if($lw_top_header_image == "Enabled") { ?>

<a name="top" title="<?php bloginfo('name'); ?>" href="<?php if(function_exists('home_url')) echo home_url(); else bloginfo('url'); ?>"><span id="top" style="background:url('<?php header_image(); ?>') no-repeat;height:<?php echo HEADER_IMAGE_HEIGHT; ?>px;width:<?php echo HEADER_IMAGE_WIDTH; ?>px"><strong><?php bloginfo('name'); ?></strong></span></a>

<?php }else{ ?>

<div id="top_cufon"><h1 id="logo"><a name="top" title="<?php bloginfo('name'); ?>" href="<?php if(function_exists('home_url')) echo home_url(); else bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> <small><?php bloginfo('description'); ?></small></h1></div>

<?php
    }
}

// COMMENTS PINGBACKS / TABS JQUERY

function lightword_comment_tabs(){
if(is_single()||is_page()){
?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tabs.js"></script>
<script type="text/javascript">jQuery(document).ready(function(){jQuery('tabs').lightword_tabs({linkClass : 'tabs',containerClass : 'tab-content',linkSelectedClass : 'selected',containerSelectedClass : 'selected',onComplete : function(){}});});</script>
<?php
}
}

// CUFON SETTINGS

if ($lw_cufon_settings == "Enabled") {$cufon_enabled = 1; $cufon_extra = 0; $fontface = 0;}
if ($lw_cufon_settings == "Extra") {$cufon_extra = 1; $cufon_enabled = 1; $fontface = 0;}
if ($lw_cufon_settings == "CSS3 Font-face (lightweight)") {$cufon_extra = 0; $cufon_enabled = 0; $fontface = 1;}

function lightword_cufon_header(){
global $cufon_enabled, $cufon_extra, $fontface;
$cufon_header_script = "\n<script src=\"".get_template_directory_uri()."/js/cufon-yui.js\" type=\"text/javascript\"></script>\n<script src=\"".get_template_directory_uri()."/js/vera.font.js\" type=\"text/javascript\"></script>\n<script type=\"text/javascript\">/*<![CDATA[*/Cufon.replace(['h1','h2','h3#reply-title'], { fontFamily: 'Vera' });/*]]>*/</script>";
if($cufon_extra == 1) $cufon_header_script = str_replace("vera.font.js", "vera_extra.font.js", $cufon_header_script);
if($cufon_enabled == 1) echo $cufon_header_script;
if($fontface == 1) echo "\n<style type=\"text/css\">@font-face { font-family: Vera; src: url(".get_template_directory_uri()."/alternatives/font-face/Vera-Bold.ttf);}</style>\n";
}

function lightword_cufon_footer(){
global $cufon_enabled;
$cufon_footer_script = "\n<script type=\"text/javascript\">/* <![CDATA[ */ Cufon.now(); /* ]]> */ </script>\n";
if($cufon_enabled == 1) echo $cufon_footer_script;
}

// HOME BUTTON

function lightword_homebtn($homebtn_value){
global $lw_remove_homebtn;
$selected = "";
if($lw_remove_homebtn == "false") {
    if(is_front_page()) $selected="s"; ?>
    <li><a class="<?php echo $selected; ?>" title="<?php echo $homebtn_value; ?>" href="<?php if(function_exists('home_url')) echo home_url(); else bloginfo('url'); ?>"><span><?php echo $homebtn_value ?></span></a></li>
<?php
}
}

// CANONICAL COMMENTS

function lightword_canonical_for_comments() {
global $cpage, $post;
if ( $cpage > 1 ) :
echo "\n";
echo "<link rel='canonical' href='";
echo get_permalink( $post->ID );
echo "' />\n";
endif;
}

// SEARCH BOX / WORDPRESS BASIC SEARCH OR GOOGLE CSE

function lightword_searchbox(){
global $lw_remove_searchbox, $lw_google_search_code;
$lw_google_search_code = trim(str_replace(" ","",$lw_google_search_code));
if($lw_remove_searchbox != "true")
if(!empty($lw_google_search_code)){
?>
<form action="http://www.google.com/cse" method="get" id="searchform">
<input type="text" class="textfield" name="q" size="24" id="s"/>
<input type="submit" class="button" name="sa" value="" id="go"/>
<input type="hidden" name="cx" value="<?php echo $lw_google_search_code; ?>" />
<input type="hidden" name="ie" value="UTF-8" />
</form>
<?php }else{ ?>
<form method="get" id="searchform" action="<?php if(function_exists('home_url')) echo home_url(); else bloginfo('url'); ?>"> <input type="text" value="" name="s" id="s" /> <input type="submit" id="go" value="" alt="<?php _e('Search'); ?>" title="<?php _e('Search'); ?>" /></form>
<?php
}
}

// SIDEBOX

function lightword_show_sidebox(){
global $lw_sidebox_settings;

switch ($lw_sidebox_settings)
{
case "Enabled":
default:
echo "<div class=\"comm_date\"><span class=\"data\"><span class=\"j\">".get_the_time('j')."</span>".get_the_time('M/y')."</span><span class=\"nr_comm\">";
echo "<a class=\"nr_comm_spot\" href=\"".get_permalink()."#comments\">";
if(!comments_open()) _e('Off','lightword'); else echo lightword_fb_get_comment_type_count('comment');
echo "</a></span></div>\n";
break;

case "Disabled":
break;

case "Show only in posts":
if(is_single()){
echo "<div class=\"comm_date\"><span class=\"data\"><span class=\"j\">".get_the_time('j')."</span>".get_the_time('M/y')."</span><span class=\"nr_comm\">";
echo "<a class=\"nr_comm_spot\" href=\"".get_permalink()."#comments\">";
if(!comments_open()) _e('Off','lightword'); else echo fb_get_comment_type_count('comment')."</a>";
echo "</span></div>\n";
}
break;

case "Show only date":
/* START ONLY DATE */
echo "<div class=\"comm_date only_date\"><span class=\"data\"><span class=\"j\">".get_the_time('j')."</span>".get_the_time('M/y')."</span><span class=\"nr_comm\">";
echo "</span></div>\n";
/* END ONLY DATE */
break;

case "Last two options together":
/* START  LAST TWO */
if(is_single()){
echo "<div class=\"comm_date only_date\"><span class=\"data\"><span class=\"j\">".get_the_time('j')."</span>".get_the_time('M/y')."</span><span class=\"nr_comm\">";
echo "</span></div>\n";
}
/* END LAST TWO */
break;

} // end switch
} // end function

function lightword_sidebar(){
global $lw_sidebar_settings, $lw_layout_settings;
if($lw_layout_settings=="Wider"){
switch ($lw_sidebar_settings)
{
case "One sidebar":
default:
break;

case "Two sidebars":
include (TEMPLATEPATH . '/sidebar-child.php');
break;



} // end switch
}// end if
} // end function


function lightword_simple_date(){
global $lw_sidebox_settings;
if($lw_sidebox_settings == "Disabled"){
echo "<div class=\"simple_date\">".__('Posted on','lightword')." ".get_the_time(__('F j, Y','lightword'))."</div>";
}
}

// LEGACY COMMENTS / FOR OLD VERSION OF WORDPRESS

function lightword_legacy_comments($file) {
if(!function_exists('wp_list_comments')) : // WP 2.7-only check
$file = TEMPLATEPATH.'/legacy.comments.php';
endif;
return $file;
}

// SPAM PROTECT

function check_referrer() {
if (!isset($_SERVER['HTTP_REFERER']) || $_SERVER['HTTP_REFERER'] == "") {
wp_die( __('Please enable referrers in your browser, or, if you\'re a spammer, bugger off!','lightword') );
}
}

// RSS FEED BADGE OPTIONS

function lightword_rss_feed_css_false(){
echo "<style type=\"text/css\">\nhtml #searchform{margin-top:-13px;}*+ html #searchform{margin-top:-13px;}  #content-body,x:-moz-any-link{float:left;margin-right:28px;}#content-body, x:-moz-any-link, x:default{float:none;margin-right:25px;} \n</style>\n";
}
function lightword_rss_feed_css_true(){
global $lw_layout_settings;
if($lw_layout_settings == "Wider"){
echo "<style type=\"text/css\">\n#header{background:transparent url(".get_template_directory_uri()."/images/wider/content_top_no_rss.png) no-repeat; } #content-body,x:-moz-any-link{float:left;margin-right:28px;}#content-body, x:-moz-any-link, x:default{float:none;margin-right:25px;}\n</style>";
}else{
echo "<style type=\"text/css\">\n#header{background:transparent url(".get_template_directory_uri()."/images/content_top_no_rss.png) no-repeat; } #content-body,x:-moz-any-link{float:left;margin-right:28px;}#content-body, x:-moz-any-link, x:default{float:none;margin-right:25px;}\n</style>";
}
}

function lightword_rss_feed(){
global $lw_remove_rss;
if($lw_remove_rss == "false"){ ?>
<a id="rss-feed" title="<?php _e('Syndicate this site using RSS','lightword'); ?>" href="<?php bloginfo('rss2_url'); ?>"><?php _e('Subscribe via RSS','lightword'); ?></a>
<?php } } if($lw_remove_rss == "false") add_action('wp_head','lightword_rss_feed_css_false'); else add_action('wp_head','lightword_rss_feed_css_true');

// IE6 PNG CSS FIX

function lightword_ie_png_transparency(){
global $lw_remove_rss, $lw_layout_settings, $lw_sidebox_settings, $lw_sidebar_settings;

$lw_layout_wider = "";

if($lw_layout_settings == "Wider") $lw_layout_wider = "wider/";
if($lw_layout_settings == "Wider" && $lw_sidebar_settings == "Two sidebars") $lw_layout_wider = "wider/two-sidebars/";

echo "\n<!--[if IE 6]><style type=\"text/css\">";
if($lw_remove_rss == "false"){
echo "#header{background-image: none; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='".get_template_directory_uri()."/images/".$lw_layout_wider."content_top.png',sizingMethod='scale'); }";
}else{
echo "#header{background-image: none; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='".get_template_directory_uri()."/images/".$lw_layout_wider."content_top_no_rss.png',sizingMethod='scale'); }";
}
echo "#footer{background:transparent url(".get_template_directory_uri()."/images/".$lw_layout_wider."content_bottom.gif) no-repeat;height:8px;}";

if($lw_sidebox_settings == "Show only date" || $lw_sidebox_settings == "Last two options together"){
echo ".only_date{background-image: none; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='".get_template_directory_uri()."/images/data_box.png',sizingMethod='scale'); }";
}else{
echo ".comm_date{background-image: none; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='".get_template_directory_uri()."/images/date_comm_box.png',sizingMethod='scale'); }";
}

echo "</style><![endif]-->\n";
}

// THREADED COMMENTS

function lightword_nested_comments($comment, $args, $depth) { $GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>"><div id="comment-<?php comment_ID(); ?>">
<div class="comment_content"><div class="comment-meta commentmetadata"><div class="alignleft avatar"><?php echo get_avatar($comment,$size='36'); ?></div>
<div class="alignleft" style="padding-top:5px;"><strong class="comment_author"><?php comment_author_link() ?></strong><br/><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date(__('F jS, Y - H:i','lightword')) ?></a></div><div class="clear"></div></div>
<?php comment_text() ?>
<div class="reply"><?php comment_reply_link(array_merge( $args, array('reply_text' => __('( REPLY )','lightword'), 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>
<?php if ($comment->comment_approved == '0') : ?><span class="moderation"><?php _e('Your comment is awaiting moderation.','lightword'); ?></span><br /><?php endif; ?></div><div class="clear"></div></div>
<?php
}

// CUSTOM CSS

function lightword_custom_css(){
global $lw_custom_css;
if($lw_custom_css){
echo "\n<style type=\"text/css\">\n/*<![CDATA[*/\n".$lw_custom_css."\n /*]]>*/\n</style>\n";
}
}

// ADSENSE

function lightword_adsense_spot(){
global $lw_adsense_spot;
if($lw_adsense_spot){
echo "<div align=\"center\" id=\"ad_spot\"> ";
echo $lw_adsense_spot;
echo "</div>";
}
}

// LOCALIZATION

load_theme_textdomain('lightword', get_template_directory() . '/lang');

// DASHBOARD

add_action('wp_dashboard_setup', 'lightword_custom_dashboard_widgets');

function lightword_custom_dashboard_widgets() {
   global $wp_meta_boxes;

   wp_add_dashboard_widget('custom_help_widget', 'LightWord Theme', 'lightword_custom_dashboard_help');
}

function lightword_custom_dashboard_help() {
echo '<p>Thank you for using my precious LightWord theme.<br/>Currently you\'re using  v2.0 version which fully supports wordpress 3 menus. Hooray!<br/><br/>- Andrei, ROMANIA<div style="float:right;">';
echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5545477">
<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form></div><div style="clear:both;"></div>';
}


function nullit(&$varin) {
//must pass by reference, so there is no explicit copying of var data
//if undefined variable, then returns ’’ without doing an error, otherwise just returns the var.
//this is done so we don’t get warning
if (isset($varin)) {
return ($varin);
}
else {
return ('');
}
}


// SIDEBAR WIDGETS

if ( function_exists('register_sidebar') ) { register_sidebar(array('name' =>'Sidebar','before_widget' => '','after_widget' => '','before_title' => '<h3>','after_title' => '</h3>')); }
if ( function_exists('register_sidebar') && $lw_sidebar_settings == "Two sidebars") { register_sidebar(array('name' =>'Sidebar Child','before_widget' => '','after_widget' => '','before_title' => '<h3>','after_title' => '</h3>')); }

// WORDPRESS 2.9+ FEATURES

if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'menus' );
if ( function_exists( 'add_theme_support' ) ) add_theme_support( 'automatic-feed-links' );
if ( function_exists( 'add_custom_background' ) ) add_custom_background();

// WORDPRESS 3.0+ FEATURES

if ( function_exists( 'register_nav_menus' ) )	register_nav_menus( array(
		'lightword_top_menu' => __( 'LightWord Navigation Bar', 'lightword' ),
	) );


function register_custom_menu() {
register_nav_menu('lightword_top_menu', __( 'LightWord Navigation Bar', 'lightword' ));
}
add_action('after_setup_theme', 'register_custom_menu');

$commenter = wp_get_current_commenter();

global $req; // TODO does this do anything?

function lightword_comment_fields ($fields) {
  foreach ($fields as $name => $field) {
  $fields[$name] = preg_replace('/(<label(?:.*?)>(?:.*?)<\/label>)\s*(<span class="required">\*<\/span>)?\s*(<input(?:.*?)\/>)/', '\3\1\2',$field);
  $fields[$name] = str_replace("*", "(required)", $fields[$name]);
  }
return $fields;
}

add_filter('comment_form_default_fields', 'lightword_comment_fields');

// CUSTOM HEADER
require_once(TEMPLATEPATH."/custom_header.php");

// Include CSS in WP head


if ( !is_admin() ) {
    $theme  = get_theme( get_current_theme() );
    wp_register_style( 'lightword_stylesheet', get_bloginfo( 'stylesheet_url' ), false, $theme['Version'] );
    wp_enqueue_style( 'lightword_stylesheet' );

if($lw_layout_settings == "Wider") :
    wp_register_style( 'lightword_stylesheet_wider', get_template_directory_uri() . "/wider.css", false, $theme['Version'] );
    wp_enqueue_style( 'lightword_stylesheet_wider' );
if($lw_sidebar_settings=="Two sidebars"):
    wp_register_style( 'lightword_stylesheet_newsidebar', get_template_directory_uri() . "/new_sidebar.css", false, $theme['Version'] );
    wp_enqueue_style( 'lightword_stylesheet_newsidebar' );
endif;
else:
    wp_register_style( 'lightword_stylesheet_original', get_template_directory_uri() . "/original.css", false, $theme['Version'] );
    wp_enqueue_style( 'lightword_stylesheet_original' );
endif;
}


// ENABLE FUNCTIONS

add_action('admin_menu', 'lightword_admin');
add_action('wp_head',    'lightword_cufon_header');
add_action('wp_head',    'lightword_custom_css');
add_action('wp_head',    'lightword_ie_png_transparency');
add_action('wp_footer',  'lightword_cufon_footer');
add_action('wp_footer',  'lightword_comment_tabs');
add_action( 'wp_head', 'lightword_canonical_for_comments' );
add_filter('comments_template', 'lightword_legacy_comments');

remove_action('wp_head', 'wp_generator');
remove_filter('the_content', 'wptexturize');
?>