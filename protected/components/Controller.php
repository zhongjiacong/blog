<?php

/**
 * 
 */
class Controller {
	
	public $model;
	
	public function __construct() {}
	
	public function render($view) {
		include_once dirname(__FILE__)."/../views/".$view;
	}
	
}
