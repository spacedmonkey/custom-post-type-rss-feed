<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Custom_Post_Type_RSS_Feeds
 * @author    Jonathan Harris <jon@computingcorner.co.uk>
 * @license   GPL-2.0+
 * @link      http://www.jonathandavidharris.co.uk
 * @copyright 2013 Jonathan Harris
 */
?>

<div class="wrap">

	<?php screen_icon(); ?>
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<?php printf(__('<p>This plugin doesn\'t currently have any settings to config, the plugin is a simple one. <br /><br />This plugin was written by <a href="%2$s" title="%1$s">%1$s</a>.</p>'),'Jonathan Harris','http://www.jonathandavidharris.co.uk', 'custom-post-type-rss-feed');?>

</div>
