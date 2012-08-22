<?php
	$assetsDir = "assets";
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/jpg" href="<?=$assetsDir; ?>/img/avatar.jpg" sizes="16x16" />
	<link rel="stylesheet" type="text/css" href="<?=$assetsDir; ?>/css/main.css" />
</head>
<body>
	<div id="header">
		<div class="container">
			<div id="avatar"><img src="<?=$assetsDir; ?>/img/avatar.jpg" alt="zhongjiacong" /></div>
			<div id="blogtitle">欢迎来到我的博客^_^</div>
		</div>
	</div>
	<div id="content">
		<div class="container">
			<div id="blogpanel">
				<article></article>
			</div>
			<div id="msgpanel">
				<textarea id="msgarea" cols="30" rows="5"></textarea>
				<button type="button">留言</button>
				<div class="clear"></div>
				<article>test</article>
			</div>
		</div>
	</div>
</body>
</html>