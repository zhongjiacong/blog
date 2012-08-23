$(document).ready(function(){
	$("#msgarea").keyup(function(){
		if($("#msgarea").val() != "")
			$("#msgform button").removeAttr("disabled");
		else
			$("#msgform button").attr("disabled","disabled");
	});
	
	$("#msgform button").click(function(){
		var content = $("#msgarea").val();
		var secret = $("#msgform input[type=checkbox]").attr("checked");
		$.ajax({
			type: "POST",
			url: "protected/controllers/msg.php",
			data: {content: content, secret: secret},
			dataType: "json",
			beforeSend: function(){
				$("#msgform button").attr("disabled","disabled");
				$("#msgform button").html("发送中...");
			},
			success: function(result) {
				if(result.state == "succeed") {
					$("#msgarea").val("");
					$("#msgform button").attr("disabled","disabled");
					$("#msgform button").html("成功^_^");
					if(secret != "checked")
						$("#msgform").after("<article>"+content+"</article>");
					else
						$("#msgform input[type=checkbox]").removeAttr("checked");
					var recover = function() {
						$("#msgform button").html("留言");
					}
					setTimeout(recover,2000);
				}
			}
		});
	});
});
