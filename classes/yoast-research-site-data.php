<?php

/**
 * Class Yoast_Research_Site_Data
 */
class Yoast_Research_Site_Data {

	/**
	 * @var string
	 */
	public $locale;

	/**
	 * @var string
	 */
	public $wp_version;

	/**
	 * @var string
	 */
	public $yoast_seo_version;

	/**
	 * @var string
	 */
	public $home_url;

	/**
	 * Yoast_Research_Site_Data constructor.
	 *
	 * @param string $locale The locale of the site.
	 * @param string $wp_version The WordPress version of the site.
	 * @param string $yoast_seo_version The Yoast SEO version used on the site.
	 * @param string $home_url The home URL of the site.
	 */
	public function __construct( $locale, $wp_version, $yoast_seo_version, $home_url ) {
		$this->locale = $locale;
		$this->wp_version = $wp_version;
		$this->yoast_seo_version = $yoast_seo_version;
		$this->home_url = $home_url;
	}
}
