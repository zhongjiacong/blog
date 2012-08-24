<?php
/**
 * 
 */
class BlogController extends Controller {
	
	function __construct() {}
	
	public function actionIndex() {
		$this->render("layouts/main.php");
	}
	
}
