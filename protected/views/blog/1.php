<script>
	$("#article{id}").html(
		
	);
</script>

<script>
	$("#article{id}").html(
		'<div><b>月饼</b> 09-11<br /><br />'+
		'收到的第一个中秋月饼^_^。<br />'+
		'<div><img class="img0911" src="assets/img/life/IMG_1377.JPG" alt="" /></div>'
	);
</script>

<script>
	$("#article{id}").html(
		'<div><b>购岛</b> 09-11<br /><br />'+
		'我觉得我们就应该列出日本的品牌，然后大家自觉拒绝购买。<br />'+
		'不要以为有点技术就可以很得意，中国并不缺少人才。<br />'+
		'中国的食品可以不安全，中国的交通可以不安全。<br />'+
		'但祖国终究是祖国。<br />'+
		'若这次真动起武来，我想是时候要肩负起青年责任了！<br />'
	);
</script>

<script>
	$("#article{id}").html(
		'<div><b>香港国民教育</b> 09-08<br /><br />'+
		'这样的事情，我是不会袖手旁观的。不了解实情可以理解，但没有想法和态度就很可怕。<br />'+
		'其实话不用多说，十几万人的抵制，可以见得不是什么好事，一些人也会因此臭名远扬。<br />'+
		'我小小的时候不是很听话，有时自己作对了事而结果未如家长的愿，就会责怪我做得不对，即使是其他东西引起的错。<br />'+
		'此时家人就会这样教导我：如果平时你听话的话，我怎么会自然而然地骂你呢？<br />'+
		'同样的，即使这事本身是对的，那就该好好想想为什么连对的都会抵制？错了就更不用说了。<br />'+
		'还有一点其实我并不支持小孩参加什么游行还有采访什么的，因为说实话他们还没有民事能力~<br />'+
		'莫养成自己做不好事就强迫别人配合的习惯，这样有害国家，我从不愿中国会走向没落。<br /></div>'+
		'<div><img class="img0908" src="assets/img/life/6f5147d8jw1dwoij3yg3ij.jpg" alt="" /></div>'
	);
	var changehk = function() {
		$("#article{id} div:nth-child(1)").fadeOut(1000,function() {
			$("#article{id} div:nth-child(1)").html(
				'<b>iPhone5香港提前发售</b> 09-08<br /><br />'+
				'苹果总是那么出人意料，今晚就已经在香港开售iPhone5了。<br />'+
				'12万人彻夜排队等着购买新机，我在想12万人营业额会有多少。<br />'+
				'假如都买上1台，然后32G，假如都是$749，按现在的汇率算下来就有570,090,864！<br />'+
				'都可以开一家新公司了= =<br />'
			);
			$("#article{id} div:nth-child(1)").fadeIn(1000);
		});
	}
	setTimeout(changehk, 5000);
</script>

<script>
	$("#article{id}").html(
		'<b>返校·续</b> 09-06<br /><br />'+
		'果然，在家里即使我很挑食，多不合我胃口的菜也比学校的好吃很多。<br />'+
		'回到学校就觉得吃得不习惯，这还是所谓广东各大学府最好吃的了，真是这样么？<span>这真是一件令人伤心的事。</span><br />'+
		'其实我已经很久没回家特别地去吃好吃的东西了，每次回去总是那么简简单单几天，然后又早早地跑回学校。<br />'+
		'主要还是家里有小孩子吧，我想。还有就是家人的话题，我往往不是很感兴趣。<br />'+
		'其实我也很怀念在梅州的那些日子，那些苦闷的日子背后总是有值得怀念的事物。<br />'+
		'或许在将来我还会怀念中大，怀念广州，但还没清楚哪个地方值得我永远待下去。<br />'
	);
	var addsadface = function() {
		$("#article{id} span").append("<b>>_<</b>");
		$("#article{id} span b").css("color","red");
	}
	setTimeout(addsadface, 3000);
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