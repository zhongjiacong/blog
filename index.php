<?php
	$assetsDir = "assets";
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/jpg" href="<?=$assetsDir; ?>/img/avatar.jpg" sizes="16x16" />
	<link rel="stylesheet" type="text/css" href="<?=$assetsDir; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?=$assetsDir; ?>/css/button.css" />
	<link rel="stylesheet" type="text/css" href="<?=$assetsDir; ?>/css/box.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<title>zhongjiacong's blog</title>
	<script type="text/javascript">
		baseUrl = "<?=$_SERVER['HTTP_HOST']; ?>";
	</script>
	<script type="text/javascript" src="<?=$assetsDir; ?>/js/layouts.js"></script>
	<script type="text/javascript" src="<?=$assetsDir; ?>/js/msg.js"></script>
</head>
<body>
	<div id="header">
		<div class="container">
			<div id="avatar">
				<a href="http://weibo.com/zhongjiacong">
					<img src="<?=$assetsDir; ?>/img/avatar.jpg" alt="zhongjiacong" />
				</a>
			</div>
			<div id="blogtitle">欢迎来到我的博客 ^_^</div>
		</div>
	</div>
	<div id="content">
		<div class="container">
			<div id="blogpanel">
				<article class="box">
					<?=(strpos($_SERVER["HTTP_USER_AGENT"],"Chrome"))?
						"很好，你选择了正确的浏览器^_^":
						"亲，为什么不用chrome浏览器！请自觉换过来。因为，我只用这浏览器来开发= ="; ?>
				</article>
				<article class="box">
					只有无聊到透顶的人才会不用微博人人博客来玩代码，不过这种感觉很好~
					<ul>
						<li>在这里我可以写一些有意思的应用</li>
						<li>用我自己的表达来写博文</li>
						<li>网站的风格我想改成怎样就怎样</li>
						<li>如果你以为普通博客能够做到你就太天真了</li>
						<li>好玩的还在后头</li>
						<li>...</li>
					</ul>
				</article>
			</div>
			<div id="msgpanel">
				<div id="msgform">
					<textarea id="msgarea"></textarea>
					<button id="msgbtn" type="button" disabled="disabled">留言</button>
				</div>
				<?php
					require_once "protected/dbconn.php";
					$result = mysql_query("SELECT * FROM `comment` ORDER BY `id` DESC");
					while ($row = mysql_fetch_array($result)) {
						echo "<article>".$row['content']."</article>";
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>