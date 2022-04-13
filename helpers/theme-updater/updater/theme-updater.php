<?php
				  
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Theme Updater
 */
// Includes the files needed for the theme updater
if (!class_exists('EDD_Theme_Updater_Admin')) {
	require_once TOROFILM_DIR_PATH . 'helpers/theme-updater/updater/theme-updater-admin.php';
}
// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(
	// Config settings
	$config = array(
		'remote_api_url' => 'https://torothemes.com', // Site where EDD is hosted
		'item_name'      => 'torofilm', // Name of theme
		'theme_slug'     => get_template(), // Theme slug
		'version'        => '2.5.0', // The current version of this theme
		'author'         => 'Toro'
	),
	// Strings
	$strings = array(
		'theme-license' => __('Theme License', 'torofilm'),
		'enter-key' => __('Enter your theme license key.', 'torofilm'),
		'license-key' => __('License Key', 'torofilm'),
		'license-action' => __('License Action', 'torofilm'),
		'deactivate-license' => __('Deactivate License', 'torofilm'),
		'activate-license' => __('Activate License', 'torofilm'),
		'status-unknown' => __('License status is unknown.', 'torofilm'),
		'renew' => __('Renew?', 'torofilm'),
		'unlimited' => __('unlimited', 'torofilm'),
		'license-key-is-active' => __('License key is active.', 'torofilm'),
		'expires%s' => __('Expires %s.', 'torofilm'),
		'%1$s/%2$-sites' => __('You have %1$s / %2$s sites activated.', 'torofilm'),
		'license-key-expired-%s' => __('License key expired %s.', 'torofilm'),
		'license-key-expired' => __('License key has expired.', 'torofilm'),
		'license-keys-do-not-match' => __('License keys do not match.', 'torofilm'),
		'license-is-inactive' => __('License is inactive.', 'torofilm'),
		'license-key-is-disabled' => __('License key is disabled.', 'torofilm'),
		'site-is-inactive' => __('Site is inactive.', 'torofilm'),
		'license-status-unknown' => __('License status is unknown.', 'torofilm'),
		'update-notice' => __("Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'torofilm'),
		'update-available' => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'torofilm')
	)
);
