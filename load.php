<?php
/**
 * SEO Module
 *
 * @package altis/seo
 */

namespace Altis\SEO; // phpcs:ignore

use Altis;

add_action( 'altis.modules.init', function () {
	$default_settings = [
		'enabled' => true,
		'redirects' => true,
		'metadata' => [
			'opengraph' => true,
			'twitter' => true,
			'fallback-image' => false,
			'social-urls' => [
				'facebook' => '',
				'twitter' => '',
				'instagram' => '',
				'linkedin' => '',
				'google' => '',
				'myspace' => '',
				'pinterest' => '',
				'youtube' => '',
				'wikipedia' => '',
				'soundcloud' => '',
				'tumblr' => '',
			],
		],
		'site-verification' => true,
	];
	Altis\register_module( 'seo', __DIR__, 'SEO', $default_settings, __NAMESPACE__ . '\\bootstrap' );
} );
