-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2012 年 09 月 02 日 23:32
-- 服务器版本: 5.0.51
-- PHP 版本: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `blog`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `blog`
-- 

CREATE TABLE `blog` (
  `id` int(11) NOT NULL auto_increment,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- 导出表中的数据 `blog`
-- 

INSERT INTO `blog` VALUES (1, '\r\n<script>\r\n	$("#article{id}").html(\r\n		''<b>新博客</b> 08-23<br /><br />''+\r\n		''只有无聊到透顶的人才会不用微博人人博客来玩代码，不过这种感觉很好~<br />''+\r\n		''<ul>''+\r\n			''<li>在这里我可以写一些有意思的应用</li>''+\r\n			''<li>用我自己的表达来写博文</li>''+\r\n			''<li>网站的风格我想改成怎样就怎样</li>''+\r\n			''<li>如果你以为普通博客能够做到你就太天真了</li>''+\r\n			''<li>好玩的还在后头</li>''+\r\n			''<li>...</li>''+\r\n		''</ul>''\r\n	);\r\n</script>', '2012-09-02 23:10:46');
INSERT INTO `blog` VALUES (2, '<script>\r\n	$("#article{id}").html(\r\n		''<b>知音难觅</b> 08-24<br /><br />''+\r\n		''时间总是过得很快......<br />''+\r\n		''看书的时间少了就会觉得自己一天都没什么成长，自己还没什么思想深度是可以理解的，但是不学习就不行。<br />''+\r\n		''其实，虽然自己是个理工科学生，但我一直都想学一门文科，特别是偏社会的那种，因为这与我的理想形影不离。<br />''+\r\n		''比较可惜的是在大学里没有找到多少个实质上的好朋友，我很希望有能一起学习的人。<br />''+\r\n		''就是不知道为什么会觉得这里的气氛挺浮躁的，作为一个青年人应该做些什么？我想这个我也得好好思考一下。<br />''\r\n	);\r\n</script>', '2012-09-02 23:11:21');
INSERT INTO `blog` VALUES (3, '<script>\r\n	$("#article{id}").html(\r\n		''<b>Blog Framework</b> 08-24<br /><br />''+\r\n		''历时两天，终于自己亲手写了一个web framework，有点扬眉吐气的感觉（半年前那件蛋疼的事）。<br />''+\r\n		''绝知此事要躬行，写网站不能沦为只会拿个框架来写应用的傻x，如果framework都不懂的话，只能说自己真的不懂web application。<br />''+\r\n		''虽然外观上简单，但工艺精良。<br />''+\r\n		''很爱这个Blog，亲手打造的就是会比较有感情。<br />''+\r\n		''之前一直很头疼自己的各种主站总是没有自己想要的feel，但我想，今天我是找到了。<br />''\r\n	);\r\n</script>', '2012-09-02 23:11:44');
INSERT INTO `blog` VALUES (4, '<script>\r\n	$("#article{id}").html(\r\n		''<b>100年后再打开= =</b> 08-25<br /><br />''+\r\n		''看之前去洗澡，然后想了一下，会不会打开一个通向另一个世界的通道，然后洗完澡出来兴致勃勃地看了一下直播。<br />''+\r\n		''哦，原来我想多了= =<br />''+\r\n		''<div>''+\r\n			''<img class="img0825" src="assets/img/life/DIREKTE LIVE  Den mystiske pakken -pnes fredag kl. 18   To be opened at 6pm  4pm GMT .png">''+\r\n			''<img class="img0825" src="assets/img/life/DIREKTE LIVE  Den mystiske pakken -pnes fredag kl. 18   To be opened at 6pm  4pm GMT 2.png">''+\r\n		''</div>''\r\n	);\r\n</script>', '2012-09-02 23:12:21');
INSERT INTO `blog` VALUES (5, '<script>\r\n	$("#article{id}").html(\r\n		''<b>回家</b> 08-26<br /><br />''+\r\n		''收拾好东西准备回家的时候，也是很多同学收拾东西准备开学的时候。<br />''+\r\n		''就如同学所说，回家就意味着可以大鱼大肉了。当然，对我来说还意味着另外一件事，那就是我弟弟的学习。<br />''+\r\n		''虽然说起来是小，5年级，但我感觉已经不是想象中那么小了，我5年级的时候，已经有很多事情足够影响我了。<br />''+\r\n		''我并不希望弟弟成绩能总是第一什么的，虽然他的成绩确实挺不错。我希望他能成为一个有思想的人，有理想并为之奋斗、会生活且富有情趣。<br />''+\r\n		''家里很多人的想法都已经过时了，唯独一个最有活力的人却总是长期在外，弟弟的教育我有责任，他更有机会并且更需要机会。<br />''+\r\n		''所以我带回了台式的电脑给他用，跟上时代很有必要，起码不能再像我以前那样总想着跑出去玩了。<br />''+\r\n		''有一点是挺乐观的，那就是我很多事情都做得挺好，在家最孝顺也最努力，他挺乐意听我的话。<br />''+\r\n		''我想我得跟他好好交流一下，业精于勤荒于嬉，立大志成就伟业的千里之行要开始积硅步了。<br />''\r\n	);\r\n</script>', '2012-09-02 23:12:45');
INSERT INTO `blog` VALUES (6, '<script>\r\n	$("#article{id}").html(''<b>Tips</b>: '');\r\n	$.ajax({\r\n		type: "POST",\r\n		url: "blog/ajax",\r\n		data: {case: "browser"},\r\n		beforeSend: function() {},\r\n		success: function(result) {\r\n			$("#article{id}").append(result);\r\n		}\r\n	});\r\n</script>', '2013-09-02 00:00:00');
INSERT INTO `blog` VALUES (7, '<script>\r\n	$("#article{id}").html(\r\n		''<b>返校</b> 09-01<br /><br />''+\r\n		''回家之后觉得，下一阶段第一大想法就是要有个健壮的身体。<br />''+\r\n		''读了三年这坑爹的书，觉得自己着实虚弱了很多，是时候要锻炼了。<br />''\r\n	);\r\n</script>', '2012-09-02 23:26:00');

-- --------------------------------------------------------

-- 
-- 表的结构 `comment`
-- 

CREATE TABLE `comment` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(39) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- 导出表中的数据 `comment`
-- 

INSERT INTO `comment` VALUES (1, '127.0.0.1', 'shishi', '2012-08-24 15:03:22');
INSERT INTO `comment` VALUES (2, '127.0.0.1', '', '2012-08-24 15:04:29');
INSERT INTO `comment` VALUES (3, '127.0.0.1', '', '2012-08-24 15:05:50');
INSERT INTO `comment` VALUES (4, '127.0.0.1', 'fjdk', '2012-08-24 15:18:30');
