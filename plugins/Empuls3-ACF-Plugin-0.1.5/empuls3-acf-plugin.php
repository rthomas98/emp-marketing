<?php
/**
 * Plugin Name:       Empuls3 ACF plugin
 * Description:       A WordPress plugin for custom ACF PRO Blocks, Post Types, Options Pages, Taxonomies  and more.
 * Requires at least: 6.4
 * Requires PHP:      7.4
 * Version:           0.1.5
 * Author:            ACF
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       empuls3
 *
 * @package           empuls3
 */

// Define our handy constants.
define( 'DEMO_ACF_VERSION', '0.1.5' );
define( 'DEMO_ACF_PLUGIN_DIR', __DIR__ );
define( 'DEMO_ACF_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'DEMO_ACF_PLUGIN_BLOCKS', DEMO_ACF_PLUGIN_DIR . '/blocks/' );

// Set custom load & save JSON points for ACF sync.
require 'includes/acf-json.php';
// Register blocks and other handy ACF Block helpers.
require 'includes/acf-blocks.php';
// Register a default "Site Settings" Options Page.
require 'includes/acf-settings-page.php';
// Restrict access to ACF Admin screens.
require 'includes/acf-restrict-access.php';
// Display and template helpers.
require 'includes/template-tags.php';

// Enqueue Tailwind CSS
function enqueue_tailwind_css() {
    wp_enqueue_style('tailwindcss', plugin_dir_url(__FILE__) . 'dist/styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');
