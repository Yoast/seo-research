<?php

/**
 * Class Yoast_Research_Meta
 */
class Yoast_Research_Meta {

	/**
	 * @var string
	 */
	public $focus_keyword;

	/**
	 * @var string
	 */
	public $seo_title;

	/**
	 * @var string
	 */
	public $meta_description;

	/**
	 * @var string
	 */
	public $score;

	/**
	 * @var string
	 */
	public $content_score;

	/**
	 * Yoast_Research_Meta constructor.
	 *
	 * @param string $focus_keyword The focus keyword.
	 * @param string $seo_title The SEO title.
	 * @param string $meta_description The meta description.
	 * @param string $score The SEO score.
	 * @param string $content_score The content score.
	 */
	public function __construct( $focus_keyword, $seo_title, $meta_description, $score, $content_score ) {
		$this->focus_keyword = $focus_keyword;
		$this->seo_title = $seo_title;
		$this->meta_description = $meta_description;

		$this->score = $score;
		$this->content_score = $content_score;
	}
}
