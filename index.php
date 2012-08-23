<?php

require_once "protected/blog.php";

$config = array(
	"assets"=>array("dir"=>"assets")
);

$myblog = new blog($config);

$myblog->run();
