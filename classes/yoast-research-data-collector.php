<?php

/**
 * Class YoastResearchDataCollector
 */
class Yoast_Research_Data_Collector {

	/**
	 * @var Yoast_Research_Site_Data
	 */
	public $site;

	/**
	 * @var array
	 */
	public $posts = array();

	/**
	 * @var array
	 */
	public $terms = array();

	/**
	 * Adds the site data to the collector.
	 *
	 * @param Yoast_Research_Site_Data $site_data The site data.
	 *
	 * @return void
	 */
	public function add_site_data( Yoast_Research_Site_Data $site_data ) {
		$this->site = $site_data;
	}

	/**
	 * Adds the post data to the collector.
	 *
	 * @param Yoast_Research_Post_Data $post_data The post data.
	 *
	 * @return void
	 */
	public function add_post_data( Yoast_Research_Post_Data $post_data ) {
		$this->posts[] = $post_data;
	}

	/**
	 * Add the term to the collector.
	 *
	 * @param Yoast_Research_Term_Data $term_data The term data.
	 *
	 * @return void
	 */
	public function add_term_data( Yoast_Research_Term_Data $term_data ) {
		$this->terms[] = $term_data;
	}
}
