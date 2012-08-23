<?php

/**
 * 
 */
class blog {
	
	private $config = array();
	
	function __construct($config) {
		$this->config = $config;
	}
	
	function run() {
		require_once "views/layouts/main.php";
	}
	
}
