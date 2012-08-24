<?php
/**
 * Blog Class
 * Singleton Pattern
 * Author zhongjiacong
 * 2012-08-24
 */

class Blog {
	private $_config = array();
	public $assets;
	static private $_instance = NULL;
	
	private function __construct() {}
	private function __clone() {}
	
	static public function getInstance() {
		if(is_null(self::$_instance) || !isset(self::$_instance)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	
	static public function createBlog($config) {
		$blog = Blog::getInstance();
		$blog->_config = include_once($config);
		return $blog;
	}
	
	static public function app() {
		return self::$_instance;
	}
	
	public function getDB() {
		return self::$_instance->_config["db"];
	}
	
	private function getFiles($dir)
	{
	    if (is_file($dir)) {
	        return array($dir);
	    }
	    $files = array();
	    if (is_dir($dir) && ($dir_p = opendir($dir))) {
	        $ds = DIRECTORY_SEPARATOR;
	        while (($filename = readdir($dir_p)) !== false) {
	            if ($filename=='.' || $filename=='..') { continue; }
	            $filetype = filetype($dir.$ds.$filename);
	            if ($filetype == 'dir') {
	            	// temporary not recursion
	                // $files = array_merge($files, Blog::app()->getFiles($dir.$ds.$filename));
	            } elseif ($filetype == 'file') {
	                $files[] = $dir.$ds.$filename;
	            }
	        }
	        closedir($dir_p);
	    }
	    return $files;
	}
	
	private function includeFiles() {
		$foldArr = array(
			"components"=>Blog::app()->getFiles(dirname(__FILE__)."/components"),
			"models"=>Blog::app()->getFiles(dirname(__FILE__)."/models"),
			"mailer"=>Blog::app()->getFiles(dirname(__FILE__)."/extensions/mailer"),
		);
		foreach ($foldArr as $foldkey => $dirArr) {
			foreach ($dirArr as $dirkey => $value) {
				require_once $value;
				// echo $value;
			}
		}
	}
	
	private function url() {
		$uri = explode('/',$_SERVER['REQUEST_URI']);
		
		// $uri[0]:empty $uri[1]:blog
		array_shift($uri);
		array_shift($uri);
		
		$class = array_shift($uri);
		$class = ($class != "")?$class:Blog::app()->_config["defaultController"];
		$class = ucwords(strtolower($class)).'Controller';
		
		$method = array_shift($uri);
		$method = ($method != "")?$method:"index";
		$method = "action".ucwords(strtolower($method));
		
		$var = strtolower(array_shift($uri));
		
		// Inherit the Controller Class
		require_once dirname(__FILE__)."/components/Controller.php";
		$classPath = dirname(__FILE__)."/controllers/".$class.".php";
		if(file_exists($classPath)) {
			require_once $classPath;
			if(class_exists($class)) {
				$clsHandler = new $class();
				if(method_exists($class,$method)) {
					$clsHandler->$method($var);
				}
				else if($method != '') {
					header('HTTP/1.0 404 Not Found');
					exit;
				}
			}
		}
		else {
			header('HTTP/1.0 404 Not Found');
			exit;
		}
	}
	
	public function run() {
		Blog::app()->assets = Blog::app()->_config["assets"];
		Blog::app()->includeFiles();
		//require_once dirname(__FILE__)."/views/layouts/main.php";
		Blog::app()->url();
	}
	
}
