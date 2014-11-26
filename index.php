<?php

/*
    Plugin Name: Remove itthinx Updates Plugin Notice
    Plugin URI: https://github.com/sozot/Remove-itthinx-Updates-Plugin-Notice
    Description: This plugin makes it easy to remove the itthinx Updates Plugin Notice from the top of your WordPress Admin page.
    Version: 1.0
    Author: Andy Sozot
    Author URI: https://sozot.com/
*/

if(!class_exists('RemoveitthinxUpdatesPluginNotice')) :

class RemoveitthinxUpdatesPluginNotice {
    public function __construct() {
        add_action( 'plugins_loaded', array( $this, 'plugins_loaded' ) );
    }
    public function plugins_loaded() {
        if ( is_admin() ) {
            remove_action('admin_notices', 'itthinx_updates_install', 10);
        }
    }
}
$GLOBALS['wc_removeitthinxupdatespluginnotice'] = new RemoveitthinxUpdatesPluginNotice();
endif;
?>
