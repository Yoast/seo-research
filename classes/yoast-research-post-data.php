<?php

/**
 * Class Yoast_Research_Post_Data
 */
class Yoast_Research_Post_Data {
	/**
	 * @var Yoast_Research_Content
	 */
	public $content;

	/**
	 * @var Yoast_Research_Meta
	 */
	public $meta;

	/**
	 * @var string
	 */
	public $multiple_keywords;

	/**
	 * Yoast_Research_Post_Data constructor.
	 *
	 * @param Yoast_Research_Content $content
	 * @param Yoast_Research_Meta    $meta
	 * @param array $multiple_keywords
	 */
	public function __construct( Yoast_Research_Content $content, Yoast_Research_Meta $meta, $multiple_keywords ) {
		$this->content = $content;
		$this->meta = $meta;
		$this->multiple_keywords = $this->handle_multiple_keywords( $multiple_keywords );
	}

	/**
	 * Handles the decoding of the multiple keywords.
	 *
	 * @param string $keywords JSON string containing the keywords.
	 *
	 * @return array Array containing the keywords. Can be empty.
	 */
	private function handle_multiple_keywords( $keywords ) {
		if ( $keywords === "" ) {
			return array();
		}

		return json_decode( $keywords );
	}

}
