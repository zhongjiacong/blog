$(document).ready(function(){
	$(document).keypress(function(e){
		if((e.ctrlKey && e.which == 13 || e.which == 10) && $("#msgform textarea").val() != "") {
			$("#msgform button").click();
			document.body.focus();
		} else if ((e.shiftKey && e.which==13 || e.which == 10) && $("#msgform textarea").val() != "") {
			$("#msgform button").click();
			document.body.focus();
        }          
	});
	
	$("#msgform textarea").keyup(function(){
		if($("#msgform textarea").val() != "")
			$("#msgform button").removeAttr("disabled");
		else
			$("#msgform button").attr("disabled","disabled");
	});
	
	$("#msgform button").click(function(){
		var content = $("#msgform textarea").val();
		if(content != "") {
			var secret = $("#msgform input[type=checkbox]").attr("checked");
			$.ajax({
				type: "POST",
				url: "msg/send",
				data: {content: content, secret: secret},
				dataType: "json",
				beforeSend: function(){
					$("#msgform button").attr("disabled","disabled");
					$("#msgform button").html("发送中...");
				},
				success: function(result) {
					if(result.state == "succeed") {
						$("#msgform textarea").val("");
						$("#msgform button").attr("disabled","disabled");
						$("#msgform button").html("成功^_^");
						if(secret != "checked")
							$("#msgpanel div:last-child article:nth-child(1)").before("<article>"+
								result.content+"</article>");
						else
							$("#msgform input[type=checkbox]").removeAttr("checked");
						var recover = function() {
							$("#msgform button").html("留言");
						}
						setTimeout(recover,2000);
					}
				}
			});
		}
	});
});
