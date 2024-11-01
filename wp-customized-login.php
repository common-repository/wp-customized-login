<?php
/*
Plugin Name: WP  Customized Login
Plugin URI: http://www.thinkinginwordpress.com/2008/12/customized-wordpress-login-page-plugin/
Description: Customize Login Screen,add your own logo,let the logo point to your own website
Version: 1.0
Author:Brajesh K Singh
Author URI:http://ThinkingInWordpress.com
License:GPL ,please check the gpl file attached with the plugin
*/
add_action("login_head","tiw_wp_customized_login");
add_filter("login_headerurl","tiw_site_url");
//add_filter("login_message","tiw_login_message");
add_filter("login_headertitle","tiw_login_header_title");
/*Title to be shown when mouse it put over the logo */

function tiw_login_header_title($message)
{
return get_bloginfo('description');
}

/*This is the replacement for the url wordpress.org,now clicking on the logo will take back to user's own website */

function tiw_site_url($url)
{
return get_bloginfo('siteurl');
}
/*add the CSS file in the head */
function tiw_wp_customized_login()
{

$stylesheet_uri=get_bloginfo('siteurl')."/".PLUGINDIR."/".dirname(plugin_basename(__FILE__))."/custom-login.css";
echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"$stylesheet_uri\" />";
}

?>