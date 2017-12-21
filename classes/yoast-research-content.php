<?php

/**
 * Class Yoast_Research_Content
 */
class Yoast_Research_Content {
	/**
	 * @var string
	 */
	public $title;

	/**
	 * @var string
	 */
	public $url;

	/**
	 * @var string
	 */
	public $content;

	/**
	 * Yoast_Research_Content constructor.
	 *
	 * @param string $title The title of the post or term.
	 * @param string $url The URL of the post or term.
	 * @param string $content The content of the post or term.
	 */
	public function __construct( $title, $url, $content ) {
		$this->title = $title;
		$this->url = $url;
		$this->content = $content;
	}
}
