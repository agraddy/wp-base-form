<?php
namespace agraddy\base;

class Form {
	public $config = [];

	function __construct() {
	}

	function config($key, $value) {
		$this->config[$key] = $value;
	}
}

?>
