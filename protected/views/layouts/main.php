<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/jpg" href="<?=Blog::app()->assets["dir"]; ?>/img/avatar.jpg" sizes="16x16" />
	<link rel="stylesheet" type="text/css" href="<?=Blog::app()->assets["dir"]; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?=Blog::app()->assets["dir"]; ?>/css/button.css" />
	<link rel="stylesheet" type="text/css" href="<?=Blog::app()->assets["dir"]; ?>/css/box.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<title>zhongjiacong's blog</title>
	<script type="text/javascript">
		baseUrl = "<?=$_SERVER['HTTP_HOST']; ?>";
	</script>
	<script type="text/javascript" src="<?=Blog::app()->assets["dir"]; ?>/js/layouts.js"></script>
	<script type="text/javascript" src="<?=Blog::app()->assets["dir"]; ?>/js/msg.js"></script>
	<script type="text/javascript" src="<?=Blog::app()->assets["dir"]; ?>/js/comment.js"></script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26964472-2']);
		_gaq.push(['_setDomainName', 'zhongjiacong.com']);
		_gaq.push(['_trackPageview']);
	
		(function() {
	    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head>
<body>
	<div id="header">
		<div class="container">
			<div id="avatar">
				<a href="http://weibo.com/zhongjiacong">
					<img src="<?=Blog::app()->assets["dir"]; ?>/img/avatar.jpg" alt="zhongjiacong" />
				</a>
			</div>
			<div id="blogtitle">Welcome to my blog ^_^</div>
		</div>
	</div>
	<div id="content">
		<div class="container">
			<div id="blogpanel">
				<?php require_once isset($_GET['page'])?
					dirname(__FILE__)."/../blog/".intval($_GET['page']).".php":
					dirname(__FILE__)."/../blog/1.php"; ?>
			</div>
			<div id="msgpanel">
				<div id="msgform">
					<textarea></textarea>
					<button id="msgbtn" type="button" disabled="disabled">留言</button>
					<label for="secret">私密</label>
					<input id="secret" type="checkbox" />
				</div>
				<div></div>
			</div>
		</div>
	</div>
</body>
</html>