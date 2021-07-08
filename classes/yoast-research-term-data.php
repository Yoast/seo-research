<?php

/**
 * Class Yoast_Research_Term_Data
 */
class Yoast_Research_Term_Data {
	
	/**
	 * @var Yoast_Research_Content
	 */
	public $content;
	
	/**
	 * @var Yoast_Research_Meta
	 */
	public $meta;

	/**
	 * Yoast_Research_Term_Data constructor.
	 *
	 * @param Yoast_Research_Content $content
	 * @param Yoast_Research_Meta    $meta
	 */
	public function __construct( Yoast_Research_Content $content, Yoast_Research_Meta $meta ) {
		$this->content = $content;
		$this->meta = $meta;
	}

}
