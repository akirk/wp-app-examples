<?php
/**
 * Plugin Name: Minimal App
 * Description: The simplest possible wp-app example
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Requires at least: 5.0
 */

require_once __DIR__ . '/vendor/autoload.php';

use WpApp\WpApp;

add_action(
	'plugins_loaded',
	function () {
		$app = new WpApp(
			__DIR__ . '/templates',
			'minimal',
			[
				'show_masterbar_for_anonymous' => true,
				'show_wp_logo'                 => false,
				'show_site_name'               => true,
			]
		);
		$app->register_theme( 'compact', __( 'Compact', 'minimal-app' ), __DIR__ . '/templates/compact' );
		$app->route( 'about' );

		add_action(
			'wp_app_load_theme_minimal_compact',
			function () {
				wp_app_enqueue_style(
					'minimal-app-compact',
					plugins_url( 'assets/compact.css', __FILE__ ),
					[],
					'1.0.0',
					'minimal'
				);
			}
		);

		$app->init();
	}
);
