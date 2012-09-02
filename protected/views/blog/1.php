<script>
	$("#article{id}").html(
		
	);
</script>

<script>
	$("#article{id}").html(
		'<b>返校</b> 09-01<br /><br />'+
		'回家之后觉得，下一阶段第一大想法就是要有个健壮的身体。<br />'+
		'读了三年这坑爹的书，觉得自己着实虚弱了很多，是时候要锻炼了。<br />'
	);
</script>

<script>
	$("#article{id}").html('<b>Tips</b>: ');
	$.ajax({
		type: "POST",
		url: "blog/ajax",
		data: {case: "browser"},
		beforeSend: function() {},
		success: function(result) {
			$("#article{id}").append(result);
		}
	});
</script>

<script>
	$("#article{id}").html(
		'<b>回家</b> 08-26<br /><br />'+
		'收拾好东西准备回家的时候，也是很多同学收拾东西准备开学的时候。<br />'+
		'就如同学所说，回家就意味着可以大鱼大肉了。当然，对我来说还意味着另外一件事，那就是我弟弟的学习。<br />'+
		'虽然说起来是小，5年级，但我感觉已经不是想象中那么小了，我5年级的时候，已经有很多事情足够影响我了。<br />'+
		'我并不希望弟弟成绩能总是第一什么的，虽然他的成绩确实挺不错。我希望他能成为一个有思想的人，有理想并为之奋斗、会生活且富有情趣。<br />'+
		'家里很多人的想法都已经过时了，唯独一个最有活力的人却总是长期在外，弟弟的教育我有责任，他更有机会并且更需要机会。<br />'+
		'所以我带回了台式的电脑给他用，跟上时代很有必要，起码不能再像我以前那样总想着跑出去玩了。<br />'+
		'有一点是挺乐观的，那就是我很多事情都做得挺好，在家最孝顺也最努力，他挺乐意听我的话。<br />'+
		'我想我得跟他好好交流一下，业精于勤荒于嬉，立大志成就伟业的千里之行要开始积硅步了。<br />'
	);
</script>

<script>
	$("#article{id}").html(
		'<b>100年后再打开= =</b> 08-25<br /><br />'+
		'看之前去洗澡，然后想了一下，会不会打开一个通向另一个世界的通道，然后洗完澡出来兴致勃勃地看了一下直播。<br />'+
		'哦，原来我想多了= =<br />'+
		'<div>'+
			'<img class="img0825" src="assets/img/life/DIREKTE LIVE  Den mystiske pakken -pnes fredag kl. 18   To be opened at 6pm  4pm GMT .png">'+
			'<img class="img0825" src="assets/img/life/DIREKTE LIVE  Den mystiske pakken -pnes fredag kl. 18   To be opened at 6pm  4pm GMT 2.png">'+
		'</div>'
	);
</script>

<script>
	$("#article{id}").html(
		'<b>Blog Framework</b> 08-24<br /><br />'+
		'历时两天，终于自己亲手写了一个web framework，有点扬眉吐气的感觉（半年前那件蛋疼的事）。<br />'+
		'绝知此事要躬行，写网站不能沦为只会拿个框架来写应用的傻x，如果framework都不懂的话，只能说自己真的不懂web application。<br />'+
		'虽然外观上简单，但工艺精良。<br />'+
		'很爱这个Blog，亲手打造的就是会比较有感情。<br />'+
		'之前一直很头疼自己的各种主站总是没有自己想要的feel，但我想，今天我是找到了。<br />'
	);
</script>

<script>
	$("#article{id}").html(
		'<b>知音难觅</b> 08-24<br /><br />'+
		'时间总是过得很快......<br />'+
		'看书的时间少了就会觉得自己一天都没什么成长，自己还没什么思想深度是可以理解的，但是不学习就不行。<br />'+
		'其实，虽然自己是个理工科学生，但我一直都想学一门文科，特别是偏社会的那种，因为这与我的理想形影不离。<br />'+
		'比较可惜的是在大学里没有找到多少个实质上的好朋友，我很希望有能一起学习的人。<br />'+
		'就是不知道为什么会觉得这里的气氛挺浮躁的，作为一个青年人应该做些什么？我想这个我也得好好思考一下。<br />'
	);
</script>

<script>
	$("#article{id}").html(
		'<b>新博客</b> 08-23<br /><br />'+
		'只有无聊到透顶的人才会不用微博人人博客来玩代码，不过这种感觉很好~<br />'+
		'<ul>'+
			'<li>在这里我可以写一些有意思的应用</li>'+
			'<li>用我自己的表达来写博文</li>'+
			'<li>网站的风格我想改成怎样就怎样</li>'+
			'<li>如果你以为普通博客能够做到你就太天真了</li>'+
			'<li>好玩的还在后头</li>'+
			'<li>...</li>'+
		'</ul>'
	);
</script>