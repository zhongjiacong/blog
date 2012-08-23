$(document).ready(function(){
	$("#msgarea").keyup(function(){
		if($("#msgarea").val() != "")
			$("#msgbtn").removeAttr("disabled");
		else
			$("#msgbtn").attr("disabled","disabled");
	});
	
	$("#msgbtn").click(function(){
		var content = $("#msgarea").val();
		$.ajax({
			type: "POST",
			url: "protected/msg.php",
			data: {content: content},
			dataType: "json",
			beforeSend: function(){
				$("#msgbtn").attr("disabled","disabled");
				$("#msgbtn").html("发送中...");
			},
			success: function(result) {
				if(result.state == "succeed") {
					$("#msgform").after("<article>"+content+"</article>");
					$("#msgarea").val("");
					$("#msgbtn").removeAttr("disabled");
					$("#msgbtn").html("留言");
				}
			}
		});
	});
});
