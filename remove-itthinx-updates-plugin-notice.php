<?php
/**
 * Plugin Name: Remove itthinx Updates Plugin Notice
 * Plugin URI: https://sozot.com/projects/
 * Description: This plugin removes the itthinx Updates Plugin Notice from the top of your WordPress Admin page.
 * Version: 1.0.4
 * Author: Andy Sozot
 * Author URI: https://sozot.com/
 * Requires at least: 3.0
 * Tested up to: 4.9.8
 *
 * @author sozot
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
