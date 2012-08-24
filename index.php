<?php

require_once "protected/Blog.php";
$config = dirname(__FILE__).'/protected/config/main.php';
Blog::createBlog($config)->run();
