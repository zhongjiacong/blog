<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/jpg" href="<?=$this->config["assets"]["dir"]; ?>/img/avatar.jpg" sizes="16x16" />
	<link rel="stylesheet" type="text/css" href="<?=$this->config["assets"]["dir"]; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?=$this->config["assets"]["dir"]; ?>/css/button.css" />
	<link rel="stylesheet" type="text/css" href="<?=$this->config["assets"]["dir"]; ?>/css/box.css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<title>zhongjiacong's blog</title>
	<script type="text/javascript">
		baseUrl = "<?=$_SERVER['HTTP_HOST']; ?>";
	</script>
	<script type="text/javascript" src="<?=$this->config["assets"]["dir"]; ?>/js/layouts.js"></script>
	<script type="text/javascript" src="<?=$this->config["assets"]["dir"]; ?>/js/msg.js"></script>
</head>
<body>
	<div id="header">
		<div class="container">
			<div id="avatar">
				<a href="http://weibo.com/zhongjiacong">
					<img src="<?=$this->config["assets"]["dir"]; ?>/img/avatar.jpg" alt="zhongjiacong" />
				</a>
			</div>
			<div id="blogtitle">Welcome to my blog ^_^</div>
		</div>
	</div>
	<div id="content">
		<div class="container">
			<div id="blogpanel">
				<?php require_once isset($_GET['page'])?"blog/".intval($_GET['page']).".php":"blog/1.php"; ?>
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