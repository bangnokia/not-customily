<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://daudau.cc
 * @since             0.1.1
 * @package           Not_Customily
 *
 * @wordpress-plugin
 * Plugin Name:       not customily
 * Plugin URI:        https://github.com/bangnokia
 * Description:       This is not Customily
 * Version:           1.0.1
 * Author:            Nguyen Viet
 * Author URI:        https://https://daudau.cc
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       not-customily
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'NOT_CUSTOMILY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-not-customily-activator.php
 */
function activate_not_customily() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-not-customily-activator.php';
	Not_Customily_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-not-customily-deactivator.php
 */
function deactivate_not_customily() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-not-customily-deactivator.php';
	Not_Customily_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_not_customily' );
register_deactivation_hook( __FILE__, 'deactivate_not_customily' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-not-customily.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_not_customily() {

	$plugin = new Not_Customily();
	$plugin->run();

}
run_not_customily();

